<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
class Cms2base extends Common
{
    //如果session
    public function _initialize(){
 //调用所有杂项数据
      $this->getPeizhi('box','conf',17);
      $this->getPeizhi('box','conf',18);
      $this->getPeizhi('','articleqita',1);
       $this->getPeizhi('','articleqita',2);
       $this->getPeizhi('','articleqita',3);
       $this->getPeizhi('','articleqita',4);
       $this->getPeizhi('','articleqita',5);
    $this->getPeizhi('','articleqita',6);
     $this->getPeizhi('','articleqita',7);
     $this->getPeizhi('','articleqita',11);


$this->getPeizhi('box','conf',5);
$this->getPeizhi('box','conf',4);
$this->getPeizhi('box','conf',3);


        //得到这个id的所有子栏目用前缀加nav在模板显示，与杂项当前栏目名称
        $noNavs=$this->getCateNav('gonglue',44);
        // $glueZhu=$cate->where('id',44)->field('catename,id')->select();
        //左侧软装案例所有图片集
        $glueanli=$this->getManFuture(42,'arttupian',5);

         $this->assign([
            'noNavs'=>$noNavs,
            'glueanli'=>$glueanli,
        ]);


//这里必须加个前缀，不然会报错，不利于继承
        $this->getNav('getNav');
        $this->getBanner();
        $this->getPosition();


    }
    
    

    


}