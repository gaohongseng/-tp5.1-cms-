<?php
namespace app\mobile\controller;
use \think\Controller;
use \think\Db;
use app\mobile\controller\Base;
use app\mobile\model\Tonpan2_cate as CateModel;
class Video extends Cms2base
{


	//在这里写一个递归的方法
	public function index(){
		$videoRes=db('tonpan2_video')->paginate(5);

		$videoYu=db('tonpan2_video')->find(10);
		$this->assign([
			'videoRes'=>$videoRes,
			'videoYu'=>$videoYu
	]);
		return $this->fetch();
	}

}