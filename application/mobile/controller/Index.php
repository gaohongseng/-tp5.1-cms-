<?php
namespace app\mobile\controller;
use \think\Controller;
use \think\Db;
class Index extends Cms2base
{
	public function index(){
		$attr=[3,5,7,42];
		$iattr=implode(',',$attr);

     	$cateRes=db('tonpan2_cate')->where("id IN($iattr)")->select();

     	$hanye=db('tonpan2_article')->where(array('cateid'=>27))->limit(5)->select();
     	$gongsi=db('tonpan2_article')->where(array('cateid'=>29))->limit(5)->select();
     	$dongtai=db('tonpan2_article')->where(array('cateid'=>30))->limit(5)->select();

/**/
		$youhua=db('tonpan2_article')->where(array('cateid'=>8))->limit(5)->select();

		$weixin=db('tonpan2_article')->where(array('cateid'=>12))->limit(5)->select();
     	$this->assign([
     		'careRes'=>$cateRes,
     		'hanye'=>$hanye,
     		'gongsi'=>$gongsi,
     		'dongtai'=>$dongtai,
     		'youhua'=>$youhua,
     		'weixin'=>$weixin,
     	]);
		return $this->fetch();
	}




	
}
