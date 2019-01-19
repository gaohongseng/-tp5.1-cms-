<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\controller\Base;
use think\request;
use app\index\model\Tonpan2_cate as CateModel;
class Fenmian extends Cms2base
{

//在这里写一个递归的方法
	public function index(){

		$fenmianRes=db('tonpan2_cate')->find(input("fenmianId"));
		$this->assign("fenmianRes",$fenmianRes);

		if(request()->isPOST()){
			if(input("xinmin")=='' or input("shouji")==''){
				echo '<script>alert("姓名电话不能为空!")</script>';
			}else{
				$data=input("post.");
				$res=db("tonpan2_form")->insert($data);
				if($res){
					$this->success("咨询成功,请您耐心等待!",url('index',array('fenmianId'=>5)),'',0.5);
				}else{
					$this->error("咨询失败,请您重新提交!",url('index',array('fenmianId'=>5)),'',0.5);
				}
			}

		}



	    return $this->fetch();
	}

	public function guanyu(){
		$fenmianRes=db('tonpan2_cate')->find(input("fenmiansId"));
		$this->assign('fenmianRes',$fenmianRes);
		 return $this->fetch();
	}

	public function lianxi(){
		$fenmianRes=db('tonpan2_cate')->find(input("fenmiansId"));
		if(request()->isPOST()){
			if(input("xinmin")=='' or input("shouji")==''){
				echo '<script>alert("姓名电话不能为空!")</script>';
			}else{
				$data=input("post.");
				$res=db("tonpan2_form")->insert($data);
				if($res){
					$this->success("咨询成功,请您耐心等待!",url('lianxi'),'',0.5);
				}else{
					$this->error("咨询失败,请您重新提交!",url('lianxi'),'',0.5);
				}
			}

		}
	
		$this->assign('fenmianRes',$fenmianRes);
		 return $this->fetch();
	}

	public function zizhi(){
		$fenmianRes=db('tonpan2_cate')->find(input("fenmiansId"));
		$this->assign('fenmianRes',$fenmianRes);
		 return $this->fetch();
	}

	public function huikuan(){
		$fenmianRes=db('tonpan2_cate')->find(input("fenmiansId"));
		$this->assign('fenmianRes',$fenmianRes);
		 return $this->fetch();
	}

	public function tuiguan(){
		 return $this->fetch();
	}
}