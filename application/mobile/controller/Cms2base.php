<?php
namespace app\mobile\controller;
use \think\Controller;
use \think\Db;
use app\mobile\model\Tonpan2_cate as CateModel;
class Cms2base extends Controller
{
    //如果session
    public function _initialize(){
    
       
        $this->getphoneNav();
        $this->peizhi();
        $this->qita();
        $this->artNews(5);
        $this->artHot(5);

        /*封面页是theid*/
        if(input('fenmianId')){
            $keywords=$this->getkeywords(input('fenmianId'));
            $this->assign('keywords',$keywords);


        }else if(input('tulistId')){

            $this->getPos(input('tulistId'));
            $keywords=$this->getkeywords(input('tulistId'));
            $this->assign('keywords',$keywords);

        }else if(input('artlistId')){
             $this->getPos(input('artlistId'));
            $keywords=$this->getkeywords(input('artlistId'));
            $this->assign('keywords',$keywords);
        }else if(input('theid')){
 

            $keywords=$this->getkeywords(input('theid'));
            $this->assign('keywords',$keywords);
        }





        if(input('lisId')){
            
            $this->getPosArt(input('lisId'));
        }else if(input('tuId')){

            $this->getPosArt(input('tuId'));}
        // }else if(input('theid')){
        //     $this->getPosArt(input('theid'));
        // }else if(input('wtid')){
        //     $this->getPosArt(input('wtid'));
        // }





    }



     public function getPosArt($cateid){
       $cate=new \app\mobile\model\Tonpan2_cate();
       $posArrart=$cate->_getparentidart($cateid);
       $this->assign('posArrart',$posArrart);
    }




//得到所有显示的主栏目
     public function getphoneNav(){
        $attr=[32,33,34,35];
        $iattr=implode(',',$attr);
        $phoneNav=db('tonpan2_cate')->where("id IN($iattr)")->select();
        $this->assign([
            'phoneNav'=>$phoneNav
        ]);
     }
     public function getNavCates($pid=0){
        $data['pid']=$pid;
        $data['rec_index']=1;
$cateres=db('tonpan2_cate')->where($data)->order('sort asc')->select();
            $this->assign([
            'cateres'=>$cateres
         ]);
       
    }


//无论子集还是父级都调用自身
    public function getNavChild($id=0){
         $cateres=db('tonpan2_cate')->order('sort asc')->where(array('pid'=>$id))->select();
         //如果是子类的话也需要这样
         if(empty($cateres)){
            $pid=db('tonpan2_cate')->order('sort asc')->field('pid')->find($id);
            $cateres=db('tonpan2_cate')->order('sort asc')->where(array('pid'=>$pid['pid']))->select();

         }
         return $cateres;

    }

//根据当前的栏目得到这个栏目的关键字
    public function getkeywords($cateid){
        return db('tonpan2_cate')->find($cateid);
    }
//根据栏目id的号调用关联的文章
    public function artJoin($cateid,$where='a.catename,a.enname,b.title,b.id,b.time'){
        return db('tonpan2_cate')->alias('a')->join('tonpan2_article b','a.id=b.cateid')->where(array('a.id'=>$cateid))->field($where)->paginate(8);
    }
//根据文章的id的号关联栏目
    public function cateJoin($theid,$where='b.catename,a.click,a.title,a.id,a.time,a.content'){
        return db('tonpan2_article')->alias('a')->join('tonpan2_cate b','a.cateid=b.id')->field($where)->find($theid);
    }
//推荐内容
    public function artNews($num){

        $cate=new CateModel();
        $cateid=4;
        $catgetid=$cate->getchildrenidno($cateid);
        $allarticleId=$cate->getallArt($catgetid,$cateid);
        $allArt=db("tonpan2_article")->where("id IN($allarticleId)")->order('id desc')->limit(6)->paginate($num);
           $this->assign('tuijian',$allArt);
        return $allArt;

    }

//热点内容
    public function artHot($num){

         $cate=new CateModel();
        $cateid=4;
        $catgetid=$cate->getchildrenidno($cateid);
        $allarticleId=$cate->getallArt($catgetid,$cateid);
        $allArt=db("tonpan2_article")->where("id IN($allarticleId)")->order('click desc')->limit(6)->paginate($num);
          $this->assign('redian',$allArt);
        return $allArt;
      
    }

//当前位置
  public function getPos($cateid){
       $cate=new \app\index\model\Tonpan2_cate();
       $posArr=$cate->_getparentid($cateid);

       $this->assign('posArr',$posArr);
    }



//得到当前文章的父级id,再通过父级id查找文章
    public function getparentArt($theid){

        $artcatId=db('tonpan2_article')->field('cateid')->find($theid);

        //查找当前栏目的上一级即pid
        $parPre=db('tonpan2_cate')->field('pid')->where(array('id'=>$artcatId['cateid']))->find();
        //查找到的上级栏目的文章类型必须一致
        $parSelf=db('tonpan2_cate')->field('id,type')->find($artcatId['cateid']);
        $parPar=db('tonpan2_cate')->field('id,type')->find($parPre['pid']);
        //当前与父级的type必须一致,如果没有父级就用本身。
        if(empty($parPar)){

            $artResId=$parSelf['id'];
        }else{
            if($parPar['type']==$parSelf['type']){
          
            $artResId=$parPar['id'];
            }else{
              
            $artResId=$parSelf['id'];
            }
        }

       $cate=new \app\index\model\Tonpan2_cate();
       $allArtResId=$cate->getchildrenid($artResId);
       //上一页
       return $allArtResId;
    }

    


    //得到所有显示的其他文章
    public function qita(){
        $artqitaDibu=db('tonpan2_articleqita')->find(1);
        $artqitaSlt=db('tonpan2_articleqita')->find(4);
        $artqitaLogo=db('tonpan2_articleqita')->find(5);
        $artqitaSjs=db('tonpan2_articleqita')->find(8);
        $artqitaSjdz=db('tonpan2_articleqita')->find(9);
        $artqitaSjlogoa=db('tonpan2_articleqita')->find(10);
        $artqitaSjlogob=db('tonpan2_articleqita')->find(11);
        $this->assign([
            'artqitaDibu'=>$artqitaDibu,
            'artqitaSlt'=>$artqitaSlt,
            'artqitaLogo'=>$artqitaLogo,
            'artqitaSjs'=>$artqitaSjs,
            'artqitaSjdz'=>$artqitaSjdz,
            'artqitaSjlogoa'=>$artqitaSjlogoa,
            'artqitaSjlogob'=>$artqitaSjlogob,
        ]);
    }


    //得到网站的配置信息
     public function peizhi(){
$confTitle=db('tonpan2_conf')->find(5);
$confKey=db('tonpan2_conf')->find(4);
$confDesc=db('tonpan2_conf')->find(3);
$confPerson=db('tonpan2_conf')->find(16);
$confPhone=db('tonpan2_conf')->find(13);
$confQq=db('tonpan2_conf')->find(9);
        $this->assign([
            'confTitle'=>$confTitle,
            'confKey'=>$confKey,
            'confDesc'=>$confDesc,
            'confPhone'=>$confPhone,
            'confQq'=>$confQq,
        ]);

    }


public function shoujiNav(){
    $shoujia=db('tonpan2_cate')->find(3);
    $shoujib=db('tonpan2_cate')->find(7);
    $shoujic=db('tonpan2_cate')->find(16);
    $shoujid=db('tonpan2_cate')->find(12);
    $this->assign([
        'shoujia'=>$shoujia,
        'shoujib'=>$shoujib,
        'shoujic'=>$shoujic,
        'shoujid'=>$shoujid,
    ]);

}






}