<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\controller\Base;

class Tp3article extends Base
{
	public function index(){
		//所有关联的列表页文章
		$artRes=$this->cateJoin(input('theid'));
		//点击之后增加
		db('tonpan2_article')->where(array('id'=>input('theid')))->setInc('click');
		$allArtResId=$this->getparentArt(input("theid"));

		$allArtResPrev=Db::name("tonpan2_article")->where("cateid In($allArtResId)")->where('id','<',input('theid'))->limit(1)->select();

       $allArtResNext=Db::name("tonpan2_article")->where("cateid In($allArtResId)")->where('id','>',input('theid'))->limit(1)->select();

//因为是查询,不是find所有要用0的下标
       if($allArtResPrev){
	$strpre='<span style="color:black;">上一篇:</span><a href='.url("tp3article/index",array('theid'=>$allArtResPrev[0]['id'])).'>'.mb_substr($allArtResPrev[0]['title'],0,10,'utf-8').'</a>';
		}else{
			$strpre='没有了';
		}

		 if($allArtResNext){
	$strnext='<span style="color:black;">下一篇:</span><a href='.url("tp3article/index",array('theid'=>$allArtResNext[0]['id'])).'>'.mb_substr($allArtResNext[0]['title'],0,10,'utf-8').'</a>';
		}else{
			$strnext='没有了';
		}


// 		$typepre=$typeres->wenzhan_pre('a.id<',$theid,'id desc');
// $typenext=$typeres->wenzhan_pre('a.id>',$theid,'id asc');
		
		

	// 	if($typenext){
	// $strnext='<span style="color:black;">下一篇:</span><a href='.url("tp3wenzhan/tp3wenzhanlst",array('theid'=>$typenext[0]['id'],'typeid'=>input('typeid'))).'>'.mb_substr($typenext[0]['title'],0,20,'utf-8').'</a>';
	// 	}else{
	// 		$strnext='没有了';
	// 	}


		$this->assign([
			'artRes'=>$artRes,
			'strpre'=>$strpre,
			'strnext'=>$strnext,
		]);
		return $this->fetch();
	}

}