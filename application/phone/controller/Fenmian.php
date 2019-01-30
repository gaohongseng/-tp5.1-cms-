<?php
namespace app\phone\controller;
use \think\Controller;
use \think\Db;
use think\request;
class Fenmian extends Cms2base
{

//在这里写一个递归的方法
	public function index(){
		$this->getfenmianRes(7);
	    return $this->fetch();
	}
	public function huodong(){
		$this->getfenmianRes(45);
	    return $this->fetch();
	}


}