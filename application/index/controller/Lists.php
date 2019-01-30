<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
class Lists extends Cms2base
{

	public function koubei(){
		
        $koubeiRes=$this->getManFuture(41,'article',2);
       $this->assign([
           'koubeiRes'=>$koubeiRes,
       ]);
	    return $this->fetch();
	}

  public function gonglue(){
    /*文章一般调getManFuture，getFuture主要用于区分当前栏目和其子栏目的前缀*/
         $dang=44;
        //传递glue前缀跳转各子栏目,这种用于主栏目不带id和子栏目带前缀id的跳转
     
        $glueRes=$this->getFuture('nav',$dang,'article',5);
        //得到这个栏目下所有热门文章
        $glueManRes=$this->getManFuture($dang,'article',5);

        $this->assign([
            'glueRes'=>$glueRes,
            'glueManRes'=>$glueManRes,
        ]);

        return $this->fetch();
  }


//设计团队 

  public function tuandui(){

    $tuanduiRes=$this->getFuture('tuandui',39,'article',8);
     $this->assign([
         'tuanduiRes'=>$tuanduiRes,
     ]);

    return $this->fetch();
  }




}