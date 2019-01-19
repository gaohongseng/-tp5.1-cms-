<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\model\Tonpan2_cate as CateModel;
class Tulist extends Cms2base
{


    



	//在这里写一个递归的方法
	public function index(){
		    $catid=input("tulistId");
        $cate=new CateModel();
        $catgetid=$cate->getthechild($catid);
      
         $allarticleId=$cate->getallArt($catgetid,$catid);



         if($allarticleId!=''){
$artres=db("tonpan2_article")->where("id IN($allarticleId)")->paginate(9);
         }else{
$artres="";
         }
       

        $this->assign([
           'artres'=>$artres,
        ]);
	    return $this->fetch();

      
	}



  public function tuandui(){
        $catid=input("fenmiansId");
        $cate=new CateModel();
        $catgetid=$cate->getthechild($catid);
         $allarticleId=$cate->getallArt($catgetid,$catid);
        $artres=db("tonpan2_article")->where("id IN($allarticleId)")->paginate(6);

       
        $this->assign([
           'artres'=>$artres,
        ]);
    return $this->fetch();
  }




}