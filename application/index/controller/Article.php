<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;

class Article extends Cms2base
{
	public function tuandui(){
		//目前的bug，把这种暂时底下没有子栏目的放最前面,
		//详情,44底下有文章的会被42的继承
    	$anliManRes=$this->getManFuture(42,'arttupian',6);
    	//查找当前这个栏目
    	$tuanManRes=$this->getArtRes('tuan',39,'artId','article');

        $glueManRes=$this->getManFuture(44,'article',6);
      
        // $cate=new \app\admin\model\cate();
    //这里能获取所有的文章，但只要上一篇和下一篇该怎么操作。
    //上一篇文章中从所有文章中继续查询id小于当前id的记录，

        $this->assign([
            'glueManRes'=>$glueManRes,
            'anliManRes'=>$anliManRes,
        ]);

    return $this->fetch();
  }


  public function koubei(){

  	//指定id直接调这个栏目下所有文章内容，上一页和下一页，写在基类
    $kbeiManRes=$this->getArtRes('kbei',41,'artId','article');
    //指定id调所有这个栏目文章
    $anliManRes=$this->getManFuture(42,'arttupian',6);
    
     $this->assign([
      
            'anliManRes'=>$anliManRes,
        ]);
  	return $this->fetch();
  }

  public function gonglue(){
      $dang=44;
      $noNavs=$this->getCateNav('gonglue',$dang);
        //左侧软装案例所有图片集
      $glueanli=$this->getManFuture(42,'arttupian');

      $gongManRes=$this->getArtRes('gong',44,'artId','article');

      //得到这个栏目下所有热门文章
      $glueManRes=$this->getManFuture($dang,'article');

      $this->assign([
         'noNavs'=>$noNavs,
         'glueanli'=>$glueanli,
         'glueManRes'=>$glueManRes,
      ]);

    return $this->fetch();
  }
  
  //图片集的方法
  public function anli(){
    $dang=42;
    $anliManRes=$this->getArtRes('anli',$dang,'imgId','arttupian');
    $glueManRes=$this->getManFuture($dang,'arttupian',4);
    $this->assign([
         'glueManRes'=>$glueManRes,
    ]);
    return $this->fetch();
  }





}