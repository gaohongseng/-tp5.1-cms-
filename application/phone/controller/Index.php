<?php
namespace app\phone\controller;
use \think\Controller;
use \think\Db;
class Index extends Cms2base
{

	
	public function index(){
		//查询pid为4的栏目
	    $bsRes=$this->getsaiResult('别墅',42,'desc','arttupian','and',18);
	    $jzRes=$this->getsaiResult('精装房',42,'desc','arttupian','and',18);
	    $syRes=$this->getsaiResult('商业空间',42,'desc','arttupian','and',18);

	    $showtwo=$this->showTag(9,3);

	    $sjManRes1=$this->getManFuture(39,'article','');

	    $kbManRes=$this->getManFuture(41,'article',18);
	    $sltuManRes=$this->getManFuture(53,'arttupian',1);
	    $gyFenmian=$this->getfenmian(7);
	  //软装攻略下的最新动态
	  	$sglManRes=$this->getManFuture(46,'article');
	  //软装攻略
	    $rzgManRes=$this->getManFuture(44,'article');
	    //软装攻略
	    $glFenmian=$this->getfenmian(44);
 if(request()->isPost()){

	    $this->getform(input('post.'),'/phone');
 }




	    $this->assign([
	    	'bsRes'=>$bsRes,
	    	'jzRes'=>$jzRes,
	    	'syRes'=>$syRes,
	    	'sjManRes1'=>$sjManRes1,
	 
	    	'kbManRes'=>$kbManRes,
	    	'sltuManRes'=>$sltuManRes,
	    	'sglManRes'=>$sglManRes,
	    	'rzgManRes'=>$rzgManRes,
	    	'gyFenmian'=>$gyFenmian,
	    	'glFenmian'=>$glFenmian,
	    	'showtwo'=>$showtwo,
	    ]);
		return $this->fetch();
	}


	
}
