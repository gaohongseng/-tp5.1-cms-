<?php
namespace app\phone\controller;
use \think\Controller;
use \think\Db;
class Cms2base extends \app\index\controller\Common
{
    //如果session
    public function _initialize(){
 //调用所有杂项数据
      
        $this->getPeizhi('box','conf',17);
         $this->getPeizhi('box','conf',5);
          $this->getPeizhi('box','conf',4);
           $this->getPeizhi('box','conf',3);
        $this->getPeizhi('','articleqita',1);
        $this->getPeizhi('','articleqita',8);
        $this->getPeizhi('','articleqita',9);




        $this->getPeizhi('','articleqita',10);
 
        $this->getNav('getNav');
        $this->getBanner();
        $this->getnavPosition('getnav',input(''));




     
        $showtwo='';
        $imgRes='';
        $navRes='';


        if(empty(input('navcateId'))){
			

        }else if(input('navcateId')==42){
        	$showtwo=$this->showTag(9,3);
        }else{
            //根据栏目id号得到主栏目
        	$navRes=$this->getFuture('nav',input('navcateId'),'article',3);
        
        }
        $this->assign([
           
   			'navRes'=>$navRes,
        	'showtwo'=>$showtwo,
        ]);



    }



 


}