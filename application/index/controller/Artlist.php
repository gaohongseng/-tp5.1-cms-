<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\controller\Base;
use app\index\model\cate as CateModel;
use app\index\model\video as VideoModel;
class Artlist extends Cms2base
{
	public function index(){
		/*获取视频*/
		  $catid=input("artlistId");
        $cate=new CateModel();
        $catgetid=$cate->getthechild($catid);
           
         $allarticleId=$cate->getallArt($catgetid,$catid);
         if($allarticleId!=''){
$artres=db("article")->where("id IN($allarticleId)")->paginate(6);
         }else{
$artres="";
         }

        $this->assign([
           'artres'=>$artres,
        ]);


		return $this->fetch();
	}






    public function wenti(){
        /*获取视频*/
          $catid=input("wtlistId");
        $cate=new CateModel();
        $catgetid=$cate->getthechild($catid);
         $allarticleId=$cate->getallArt($catgetid,$catid);
         if($allarticleId!=''){
$artres=db("article")->where("id IN($allarticleId)")->paginate(6);
         }else{
$artres="";
         }

        $this->assign([
           'artres'=>$artres,
        ]);


        return $this->fetch();
    }



}