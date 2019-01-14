<?php
namespace app\mobile\controller;
use \think\Controller;
use \think\Db;
use app\mobile\controller\Base;
use app\mobile\model\Tonpan2_cate as CateModel;
class Artlist extends Cms2base
{
	public function index(){
		
		 $catid=input("artlistId");
        $cate=new CateModel();
        $catgetid=$cate->getthechild($catid);
        $allarticleId=$cate->getallArt($catgetid,$catid);



         if($allarticleId!=''){
$artres=db("tonpan2_article")->where("id IN($allarticleId)")->paginate(10);
         }else{
$artres="";
         }

        $this->assign([
           'artres'=>$artres,
        ]);
      return $this->fetch();
	}

}