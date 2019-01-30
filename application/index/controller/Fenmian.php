<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use think\request;
class Fenmian extends Cms2base
{

//在这里写一个递归的方法
	public function index(){
		$cate=new \app\admin\model\cate();
		$fenmianRes=$cate->where('id',7)->find();
		$this->assign('fenmianRes',$fenmianRes);
	    return $this->fetch();
	}
	public function huodong(){
		$cate=new \app\admin\model\cate();
		$fenmianRes=$cate->where('id',45)->find();
		$this->assign('fenmianRes',$fenmianRes);
	    return $this->fetch();
	}


}