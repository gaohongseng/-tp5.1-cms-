<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\admin\controller\Auth as Auth;

class TpBase extends Controller
{
	public function _initialize(){
		
	
		if(!session('name')||!session('id')){
			return $this->error('您尚未登录系统!',url('tplogin/login'),'',0.5);
		}
		$auth=new Auth();
		$request=Request::instance();

		$con=$request->controller();

		$action=$request->action();
		$name=$con.'/'.$action;
		
		$notCheck=array('tpindex/index','tpcate/lists','tpcate/add','tpcate/edit','tpadmin/logout');


		$name=lcfirst($name);
		if(session('id')!=1){
			
			if(!in_array($name,$notCheck)){
				if(!$auth->check($name,session('id'))){
					$this->error('没有权限',url('tpindex/index'),'',0.5);
					
				}
			}
		}


		$this->getarttupian();
		$this->getarticle();
	}

	//得到所有的图片集
	public function getarttupian(){
		$getarttupian=db('cate')->where("type",3)->field('catename,id')->select();
		
		$this->assign('getarttupian',$getarttupian);
	}

	//得到所有的文章
	public function getarticle(){
		$getarticle=db('cate')->where("type",1)->field('catename,id')->order('sort asc')->select();
		
		$this->assign('getarticle',$getarticle);
	}

}