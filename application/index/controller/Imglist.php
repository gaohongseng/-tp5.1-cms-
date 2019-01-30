<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use think\request;

class Imglist extends Cms2base
{

	//在这里写一个递归的方法
	 public function index(){
       //不管有没有id都是42
        $showone=$this->showTag(6,6);
        $showtwo=$this->showTag(9,3);
        $saiCount=$this->getsaiCount($_GET);
        //整个筛选
        // dump($saiCount);
        empty($saiCount)?$imgRes=$this->getManFuture(42,'arttupian',4):$imgRes=$this->getsaiResult($saiCount,42,'title|desc','arttupian','and',1,'navcateId');
        // dump($this->getManObj(42));
     
        $this->assign([
            'imgRes'=>$imgRes,
            'showone'=>$showone,
            'showtwo'=>$showtwo,
            'saiCount'=>$saiCount
        ]);
        return $this->fetch();
		// $catid=input("tulistId") ;
      
  //       $cate=new CateModel();
  //       $catgetid=$cate->getchildrenidno($catid);
  //       dump($catgetid);
  //       $allarticleId=$cate->getallArt($catgetid,$catid);

  //       $artres=db("tonpan2_article")->where("id IN($allarticleId)")->select();
  //       $this->assign([
  //          'artres'=>$artres
  //       ]);
	 //    return $this->fetch();

	}

  public function test(){
      return $this->fetch();
  }


}