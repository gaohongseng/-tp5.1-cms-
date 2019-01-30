<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\model\video as VideoModel;

class Video extends Cms2base
{


	//在这里写一个递归的方法
	public function index(){

		$catid=input("videoId");
		$cate=new VideoModel();
        $catgetid=$cate->getchildrenidno($catid);

        $allarticleId=$cate->getallArtVideo($catgetid,$catid);

         $artVideo=db("tonpan2_video")->where("id IN($allarticleId)")->paginate(8);


         $this->assign([
           'artVideo'=>$artVideo
        ]);
		return $this->fetch();
	}

}