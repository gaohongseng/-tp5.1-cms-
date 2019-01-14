<?php
namespace app\mobile\controller;
use \think\Controller;
use \think\Db;
use app\mobile\controller\Base;
use app\mobile\model\Tonpan2_cate as CateModel;
class Fenmian extends Cms2base
{

//在这里写一个递归的方法
	public function index(){
		$id=input("fenmianId");
        $res=db('tonpan2_cate')->field('sjcontent')->find($id);
        $this->assign('phoneRes',$res);
	    return $this->fetch();
	}

	public function lianxi(){
		$id=input("fenmianId");
        $res=db('tonpan2_cate')->field('sjcontent')->find($id);
        $this->assign('phoneRes',$res);
	    return $this->fetch();

	}

}