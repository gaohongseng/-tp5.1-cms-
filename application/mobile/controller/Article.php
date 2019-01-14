<?php
namespace app\mobile\controller;
use \think\Controller;
use \think\Db;
use app\mobile\controller\Base;
use app\mobile\model\Tonpan2_cate as CateModel;
class Article extends Cms2base
{
	public function index(){


		$artid=input("lisId");

        $par=db('tonpan2_article')->field('cateid')->find($artid);

   
      $parent=db('tonpan2_cate')->field('pid')->find($par['cateid']);


      if(empty($parent['cateid'])){
         $cateid=4;
      }else{
         $cateid=$parent['cateid'];
      }


db('tonpan2_article')->where(array('id'=>$artid))->setInc('click');


        $cate=new CateModel();
        $catgetid=$cate->getchildrenidno($cateid);
        $allarticleId=$cate->getallArt($catgetid,$cateid);



        $preArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','<',input('lisId'))->order('id desc')->limit(1)->find();
        $nextArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','>',input('lisId'))->order('id asc')->limit(1)->find();

 $tuijian=$this->artNews(8);
      $redian=$this->artHot(8);


		$artRes=db('tonpan2_article')->find($artid);
		$this->assign([
			'artRes'=>$artRes,
			'preArt'=>$preArt,
			'nextArt'=>$nextArt,
      'tuijian'=>$tuijian,
      'redian'=>$redian,
		]);
		return $this->fetch();
	}

}