<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\model\Tonpan2_cate as CateModel;
use app\index\model\Tonpan2_article as ArtModel;
class Article extends Cms2base
{
	public function index(){
    $theid=input("theid");
    if(input("theid")){
      $theid=input("theid");
      $par=db('tonpan2_article')->field('cateid')->find($theid);
      $parent=db('tonpan2_cate')->field('pid')->find($par['cateid']);
      if(empty($parent['cateid'])){
         $cateid=37;
      }else{
         $cateid=$parent['cateid'];
      }
        $cate=new CateModel();
        $catgetid=$cate->getchildrenidno($cateid);
        $allarticleId=$cate->getallArt($catgetid,$cateid);
        $preArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','<',input('theid'))->order('id desc')->limit(1)->find();
        $nextArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','>',input('theid'))->order('id asc')->limit(1)->find();

    }else if(input("lisid")){
      $theid=input("lisid");
      $par=db('tonpan2_article')->field('cateid')->find($theid);
      $parent=db('tonpan2_cate')->field('pid')->find($par['cateid']);
      if(empty($parent['cateid'])){
         $cateid=39;
      }else{
         $cateid=$parent['cateid'];
      }
        $cate=new CateModel();
        $catgetid=$cate->getchildrenidno($cateid);
        $allarticleId=$cate->getallArt($catgetid,$cateid);
          
        $preArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','<',input('lisid'))->order('id desc')->limit(1)->find();
        $nextArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','>',input('lisid'))->order('id asc')->limit(1)->find();
       // $res=db('tonpan2_article')->where('id','<',$artid)->order('id desc')->limit(1)->find();

    }else if(input("artid")){
      $theid=input("artid");

      $par=db('tonpan2_article')->field('cateid')->find($theid);
      $parent=db('tonpan2_cate')->field('pid')->find($par['cateid']);
      if(empty($parent['cateid'])){
         $cateid=26;
      }else{
         $cateid=$parent['cateid'];
      }
        $cate=new CateModel();
        $catgetid=$cate->getchildrenidno($cateid);
        $allarticleId=$cate->getallArt($catgetid,$cateid);
        $preArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','<',input('artid'))->order('id desc')->limit(1)->find();
        $nextArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','>',input('artid'))->order('id asc')->limit(1)->find();

    }else if(input("wtid")){
      $theid=input("wtid");
      $par=db('tonpan2_article')->field('cateid')->find($theid);
      $parent=db('tonpan2_cate')->field('pid')->find($par['cateid']);
      if(empty($parent['cateid'])){
         $cateid=40;
      }else{
         $cateid=$parent['cateid'];
      }
        $cate=new CateModel();
        $catgetid=$cate->getchildrenidno($cateid);
        $allarticleId=$cate->getallArt($catgetid,$cateid);
        $preArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','<',input('wtid'))->order('id desc')->limit(1)->find();
        $nextArt=db("tonpan2_article")->where("id IN($allarticleId)")->where('id','>',input('wtid'))->order('id asc')->limit(1)->find();
    }


    $artRes=db('tonpan2_article')->find($theid);
    $this->assign([
      'artRes'=>$artRes,
      'preArt'=>$preArt,
      'nextArt'=>$nextArt,
  ]);
		return $this->fetch();
	}

public function gettheId(){

}

	public function video(){
		$cate=new CateModel();
		$artid=input("videoId");
		$artRes=db('tonpan2_video')->alias('a')->join('tonpan2_cate b','a.cateid=b.id')->field("a.*,b.catename")->find($artid);
		$artHot=$cate->artHot(5);
        $artNews=$cate->artNews(5);

        $article=new ArtModel();
        /*得到上一页*/
        $prev=$article->preArticle('tonpan2_video',$artid);
        /*得到下一页*/
        $next=$article->nextArticle('tonpan2_video',$artid);
 
		 $this->assign([
           'artRes'=>$artRes,
           'artHot'=>$artHot,
           'artNews'=>$artNews,
            'artprev'=>$prev,
           'artnext'=>$next,
        ]);
		return $this->fetch();
	}

}