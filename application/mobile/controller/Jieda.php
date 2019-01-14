<?php
namespace app\mobile\controller;
use \think\Controller;
use \think\Db;
use app\mobile\controller\Base;
use app\mobile\model\Tonpan2_cate as CateModel;
class Jieda extends Cms2base
{
	//在这里写一个递归的方法
	public function index(){
		$jiedaCate=db('tonpan2_cate')->find(12);
		$jiedaArt=db('tonpan2_article')->where(array('cateid'=>12))->paginate(5);
		$this->assign([
			'jiedaCate'=>$jiedaCate,
			'jiedaArt'=>$jiedaArt
		]);
		 return $this->fetch();
	}

}