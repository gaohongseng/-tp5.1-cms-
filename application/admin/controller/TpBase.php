<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\admin\controller\Auth as Auth;
class TpBase extends Controller
{
	public function _initialize(){

		echo 3333;
		if(!session('name')||!session('id')){
			return $this->error('您尚未登录系统!',url('tplogin/login'),'',0.5);
		}
		$auth=new auth();
		$request=Request::instance();

		$con=$request->controller();
		$action=$request->action();
		$name=$con.'/'.$action;
		
		$notCheck=array('tpindex/index','tpcate/lists','tpcate/add','tpcate/edit','tpadmin/logout');

		// 所有字母变小写：strtolower()
		$name=lcfirst($name);
		if(session('id')!=1){
			//查询控制器数组元素要不在这个里面才会执行，在这个里面就不会执行里面的方法
			if(!in_array($name,$notCheck)){
				if(!$auth->check($name,session('id'))){
					$this->error('没有权限',url('tpindex/index'),'',0.5);
					
				}
			}
		}


		
	}


}