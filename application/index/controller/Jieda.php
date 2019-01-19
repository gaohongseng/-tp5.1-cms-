<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\model\Tonpan2_cate as CateModel;
class Jieda extends Cms2base
{
	//在这里写一个递归的方法
	public function index(){

		$catid=input("tulistId");
      
        $cate=new CateModel();
        $catgetid=$cate->getchildrenidno($catid);
        $allarticleId=$cate->getallArt($catgetid,$catid);

        $artres=db("tonpan2_article")->where("id IN($allarticleId)")->select();

    

        $this->assign([
           'artres'=>$artres
        ]);
	    return $this->fetch();

	}

}