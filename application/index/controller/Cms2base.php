<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\model\Tonpan2_cate as CateModel;
class Cms2base extends Controller
{
    //如果session
    public function _initialize(){

    //取得所有封面栏目
        $this->getNavCates();
        $this->qita();
        $this->peizhi();
        $this->getlinks();
        $this->getlogo();
        $this->getlianxi();

        $this->getjindian();

        $this->getxinwen();

        $this->gethanye();
        $this->getwenti();
        //当前位置的操作
        if(input('tulistId')){
            $this->getPos(input('tulistId'));
             $keywords=$this->getkeywords(input('tulistId'));
            $this->assign([
                'keywords'=>$keywords,
         
            ]);
        }else if(input('artlistId')){
            $this->getPos(input('artlistId'));

            $keywords=$this->getkeywords(input('artlistId'));
            $this->assign('keywords',$keywords);
        }else if(input('fenmiansId')){
            $this->getPos(input('fenmiansId'));
            $keywords=$this->getkeywords(input('fenmiansId'));
            $this->assign('keywords',$keywords);

        }else if(input('wtlistId')){
            $this->getPos(input('wtlistId'));

            $keywords=$this->getkeywords(input('videoId'));
            $this->assign('keywords',$keywords);
        }else if(input('fenmianId')){
             $keywords=$this->getkeywords(input('fenmianId'));
            $this->assign('keywords',$keywords);
        }

        if(input('lisid')){
            $this->getPosArt(input('lisid'));
        }else if(input('artid')){
            $this->getPosArt(input('artid'));
        }else if(input('theid')){
            $this->getPosArt(input('theid'));
        }else if(input('wtid')){
            $this->getPosArt(input('wtid'));
        }
        


    if(input("fenmiansId")){
        $fenmiansId=$this->getfenmiansChild(input('fenmiansId'));
        $this->assign('fenmiansId',$fenmiansId);
    }

     if(input("theid")){
        $fenmianId=db("tonpan2_article")->field('cateid')->find(input("theid"));
        $fenmiansId=$this->getfenmiansChild($fenmianId);
        $this->assign('fenmiansId',$fenmiansId);
     }


      if(input("tulistId")){
$cate=new CateModel();
        if(input("tulistId")==4){
            $thelistId=input("tulistId");
        }else{
            $thelistIds=db('tonpan2_cate')->field("pid")->find(input("tulistId"));
            $thelistId=$thelistIds['pid'];
        }
        $tulistsId=$this->gettulistChild($thelistId);
        // dump($tulistsId);
        $this->assign('tulistsId',$tulistsId);
      }

      if(input("lisid")){
        $cate=new CateModel();
        $thelistIds=db("tonpan2_article")->field('cateid')->find(input("lisid"));
        $cateIds=$thelistIds['cateid'];

   
        if($cateIds==4){
            $thelistId=$cateIds;
        }else{
            $thelistIds=db('tonpan2_cate')->field("pid")->find($cateIds);
            $thelistId=$thelistIds['pid'];
        }

        $tulistsId=$this->gettulistChild($thelistId);


        $this->assign('tulistsId',$tulistsId);
     }
/*新闻页面的内容*/




if(input("artlistId")){
        $cate=new CateModel();
        if(input("artlistId")==26){
            $thelistId=input("artlistId");
        }else{
            $thelistIds=db('tonpan2_cate')->field("pid")->find(input("artlistId"));
            $thelistId=$thelistIds['pid'];
        }
        $artlistsId=$this->gettulistChild($thelistId);
       
        $this->assign('artlistsId',$artlistsId);
      }

      if(input("artid")){
        $cate=new CateModel();
        $thearttIds=db("tonpan2_article")->field('cateid')->find(input("artid"));
        $cateIds=$thearttIds['cateid'];

        if($cateIds==26){
            $thearttId=$cateIds;
        }else{
            $thearttIds=db('tonpan2_cate')->field("pid")->find($cateIds);
            $thearttId=$thearttIds['pid'];
        }

        $artlistsId=$this->gettulistChild($thearttId);

        $this->assign('artlistsId',$artlistsId);
     }








if(input("wtlistId")){
        $cate=new CateModel();
        if(input("wtlistId")==40){
            $thelistId=input("wtlistId");
        }else{
            $thelistIds=db('tonpan2_cate')->field("pid")->find(input("wtlistId"));
            $thelistId=$thelistIds['pid'];
        }
        $wtlistsId=$this->gettulistChild($thelistId);
       
        $this->assign('wtlistsId',$wtlistsId);
      }

      if(input("wtid")){
        $cate=new CateModel();
        $thewttIds=db("tonpan2_article")->field('cateid')->find(input("wtid"));
        $cateIds=$thewttIds['cateid'];

        if($cateIds==40){
            $thewttId=$cateIds;
        }else{
            $thewttIds=db('tonpan2_cate')->field("pid")->find($cateIds);
            $thewttId=$thewttIds['pid'];
        }

        $wtlistsId=$this->gettulistChild($thewttId);

        $this->assign('wtlistsId',$wtlistsId);
     }










    }
    
//得到传递过来的fenmiansId的值，
    public function getfenmiansChild($pid){

        $parId=db('tonpan2_cate')->field('pid')->find($pid);
        if($parId['pid']!=0){
            $parId['pid']=32;
        }else{
            $parId['pid']=32;
        }
        $cate=new CateModel();
        $cateChild=$cate->getchildrenid($parId['pid']);
        $catzi=implode(',',$cateChild);
        $catziAll=db('tonpan2_cate')->where("id IN($catzi)")->select();
        return $catziAll;
    }

    public function gettulistChild($id){
        $cate=new CateModel();
        $cateChild=$cate->getchildrenidno($id);
        $catzi=implode(',',$cateChild);
        $catziAll=db('tonpan2_cate')->where("id IN($catzi)")->select();
        return $catziAll;
    }
//得到所有显示的主栏目

     public function getNavCates(){
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
        return db('tonpan2_article')->order('id desc')->paginate($num);
    }

//热点内容
    public function artHot($num){

        return db('tonpan2_article')->order('click desc')->paginate($num);
    }


//当前位置
  public function getPos($cateid){
       $cate=new \app\index\model\Tonpan2_cate();
       $posArr=$cate->_getparentid($cateid);

       $this->assign('posArr',$posArr);
    }

 public function getPosArt($cateid){
       $cate=new \app\index\model\Tonpan2_cate();
       $posArrart=$cate->_getparentidart($cateid);

       $this->assign('posArrart',$posArrart);
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
        $artqitaDinbu=db('tonpan2_articleqita')->find(8);
         $artqitaTel=db('tonpan2_articleqita')->find(9);
         //可以
         $artqitama=db('tonpan2_articleqita')->find(6);
         //可以
 $artqitabeian=db('tonpan2_articleqita')->find(7);
        $this->assign([
            'artqitaDibu'=>$artqitaDibu,
            'artqitaSlt'=>$artqitaSlt,
            'artqitaLogo'=>$artqitaLogo,
            'artqitaDinbu'=>$artqitaDinbu,
            'artqitaTel'=>$artqitaTel,
              'artqitama'=>$artqitama,
              'artqitabeian'=>$artqitabeian,
        ]);
    }


    //得到网站的配置信息
     public function peizhi(){
$confTitle=db('tonpan2_conf')->find(5);
$confKey=db('tonpan2_conf')->find(4);
$confDesc=db('tonpan2_conf')->find(3);
$confQq=db('tonpan2_conf')->find(9);
$confDz=db('tonpan2_conf')->find(14);
$confDh=db('tonpan2_conf')->find(13);
$confYx=db('tonpan2_conf')->find(15);
        $this->assign([
            'confTitle'=>$confTitle,
            'confKey'=>$confKey,
            'confDesc'=>$confDesc,
            'confQq'=>$confQq,
            'confDh'=>$confDh,
            'confDz'=>$confDz,
            'confYx'=>$confYx,
        ]);

    }

/*普通的上一页*/
    public function preArticle($table){
       $res=db($table)->where('id','<',$artid)->order('id desc')->limit(1)->find();
    
    }

/*普通的下一页*/
    public function nextArticle($table,$artid){
       $res=db($table)->where('id','<',$artid)->order('id desc')->limit(1)->find();
  
    }
/*得到所有的友情链接*/
    public function getlinks(){
        $link=db('tonpan2_link')->select();
         $this->assign([
            'getlinks'=>$link,
        ]);
    }

    public function getlogo(){
        $getlogo=db('tonpan2_articleqita')->find(4);
        $this->assign([
            'getlogo'=>$getlogo,
        ]);
    }

     public function getlianxi(){
        $getlianxi=db('tonpan2_articleqita')->find(5);
        $this->assign([
            'getlianxi'=>$getlianxi,
        ]);
    }

    //经典案例
    public function getjindian(){
        
        $catid=4;
        $cate=new CateModel();
        $catgetid=$cate->getthebasechild($catid);

        $allarticleId=$cate->getallbaseArt($catgetid,$catid);
        if($allarticleId==''){
            $allarticleId=26;
        }
        $getjindian=db("tonpan2_article")->where("id IN($allarticleId)")->paginate(4);
        
        $this->assign([
            'getjindian'=>$getjindian,
        ]);
    }

    //行业动态
    public function gethanye(){
         $gethanye=db('tonpan2_article')->where(array('cateid'=>27))->paginate(7);
          $this->assign([
            'gethanye'=>$gethanye,
        ]);
    }

     //经典案例
    public function getxinwen(){
        
        $catid=26;
        $cate=new CateModel();
        $catgetid=$cate->getthebasechild($catid);

        $allarticleId=$cate->getallbaseArt($catgetid,$catid);
        $getxinwen=db("tonpan2_article")->where("id IN($allarticleId)")->paginate(4);
        $this->assign([
            'getxinwen'=>$getxinwen,
        ]);
    }
    //问题
     public function getwenti(){
        $allarticleId='40,41';
        $getwenti=db("tonpan2_article")->where("cateid IN($allarticleId)")->paginate(4);
          $this->assign([
            'getwenti'=>$getwenti,
        ]);
     }

}