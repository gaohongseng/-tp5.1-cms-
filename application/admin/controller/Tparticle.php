<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\cate as CateModel;
use app\admin\model\Article as ArticleModel;
use app\admin\model\video as ArticleVideo;
class Tparticle extends TpBase
{

    public function add()
    {
        $cate=new cateModel();
        $article=new ArticleModel();
        $cateres=$cate->cateres();
        if(request()->isPost()){
            $data=input("post.");
          
            // 在插入数据之前就插入图片
    //         if($_FILES['thumb']['tmp_name']){
    //                 $thumb = request()->file('thumb');
                  
    //         $info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");
    // $data['thumb']="static/admin/articleimg/".$info->getSaveName();
    //         }
// $data['tpid']=CateModel::get($data['cateid'])->value('type');
            
            $data['time']=time();
            $cateId=empty(input('cateId'))?'':input('cateId');  

            $type=$cate->where('id',$data['cateid'])->value('type');
            if($type==2){
                    if(!$cateId){
                        $this->success('封面页不能添加文章',url('lists',array('typeid'=>1)),'',0.5);
                    }else{
                        $this->success('封面页不能添加文章',url('lists',array('cateId'=>$cateId)),'',0.5);
                    }
            }else{
                if($article->save($data)){
                    if(!$cateId){
                        $this->success('添加文章成功',url('lists',array('typeid'=>1)),'',0.5);
                    }else{
                        $this->success('添加文章成功',url('lists',array('cateId'=>$cateId)),'',0.5);
                    }
                    
                }else{
                    if(!$cateId){
                        $this->success('添加文章失败',url('lists',array('typeid'=>1)),'',0.5);
                    }else{
                        $this->success('添加文章失败',url('lists',array('cateId'=>$cateId)),'',0.5);
                    }
                }
            }


        }
       
        $this->assign("cateres",$cateres);
        return $this->fetch();
    }

    public function edit()
    {

        if(request()->isPost()){
            $article=new ArticleModel;
            $data=input('post.');
            $save=$article->update($data);
            $cateId=empty(input('cateId'))?'':input('cateId');  
            //  $save=db("article")->update(input("post."));
        

          $type=$cate->where('id',$data['cateid'])->value('type');
            if($type==2){
                    if(!$cateId){
                        $this->success('封面页不能添加文章',url('lists',array('typeid'=>1)),'',0.5);
                    }else{
                        $this->success('封面页不能添加文章',url('lists',array('cateId'=>$cateId)),'',0.5);
                    }
            }else{


                if($save){
                     if(!$cateId){
                        $this->success('修改文章成功',url('lists',array('typeid'=>1)),'',0.5);
                    }else{
                        $this->success('修改文章成功',url('lists',array('cateId'=>$cateId)),'',0.5);
                    }
                }else{
                    if(!$cateId){
                        $this->success('修改文章失败',url('lists',array('typeid'=>1)),'',0.5);
                    }else{
                        $this->success('修改文章失败',url('lists',array('cateId'=>$cateId)),'',0.5);
                    }
                }
            }
        }

        $cate=new cateModel();
        // $article=new ArticleModel();
        $cateres=$cate->cateres();
        $arts=db('article')->where(array('id'=>input("artid")))->select();

        $this->assign([

            "cateres"=>$cateres,
            'arts'=>$arts
        ]);
        return $this->fetch();
    }



    public function lists()
    {
        if(input('typeid')){
             $listcate=CateModel::where('type',1)->order('sort asc')->select();
        }else if(input('cateId')){

             $listcate=CateModel::get(input('cateId'));
             //没有参数的情况下也需要有个列表展示
        }else if(empty(input('typeid')) && empty(input('cateId'))){
        
          
             $listcate=CateModel::where('type',1)->order('sort asc')->select();
              
        }


        $this->assign('listcate',$listcate);
        return $this->fetch();
    }


//删除文章
    public function del(){
         $arts=db('article')->where(array('id'=>input("artid")))->select();
         $cateId=empty(input('cateId'))?'':input('cateId');  
        if(ArticleModel::destroy(input("artid"))){

               if(!$cateId){
                    $this->success('删除文章成功',url('lists',array('typeid'=>1)),'',0.5);
                }else{
                    $this->success('删除文章成功',url('lists',array('cateId'=>$cateId)),'',0.5);
                }

         }else{

                if(!$cateId){
                    $this->success('删除文章失败',url('lists',array('typeid'=>1)),'',0.5);
                }else{
                    $this->success('删除文章失败',url('lists',array('cateId'=>$cateId)),'',0.5);
                }

        }

    }


    //视频列表页
    public function listsvideo()
    {
        $artres=db('cate')->field("a.catename,b.*")->alias("a")->join('video b','a.id=b.cateid')->where(array('type'=>input('typeid')))->paginate(8);
        $this->assign('artres',$artres);
        return $this->fetch();

    }


   public function videoAdd()
    {

        $cate=new cateModel();
        $article=new ArticleVideo();
        $cateres=$cate->cateres();
        if(request()->isPost()){
            $data=input("post.");
            $data['time']=time();
            if($article->save($data)){

                $this->success('添加文章成功',url('listsvideo',array('typeid'=>3)),'',0.5);
            }else{
                $this->error('添加文章失败',url('listsvideo',array('typeid'=>3)),'',0.5);
            }
          
            return;
        }
       
        $this->assign("cateres",$cateres);
        return $this->fetch();


    }
    

    public function videoEdit()
    {

//14907797.s21v.faiusr.com/58/ABUIABA6GAAgu6GO3QUomPvmJQ.mp4
        $arts=db('video')->find(input("videoid"));

        if(request()->isPost()){
            $article=new ArticleVideo;
            $data=input("post.");
            $save=$article->update($data,array('id'=>input('videoid')));
       
            //  $save=db("article")->update(input("post."));
            if($save){
                $this->success("修改文章成功!",url("listsvideo",array('typeid'=>3)),'',0.5);
            }else{
                $this->error("修改文章失败!",url("listsvideo",array('typeid'=>3)),'',0.5);
            }
        }

        $cate=new cateModel();
        // $article=new ArticleModel();
        $cateres=$cate->cateres();
        $this->assign([

            "cateres"=>$cateres,
            'arts'=>$arts
        ]);

        return $this->fetch();
    }



    public function videoDel()
    {

// {:url('tparticle/listsvideo',array('typeid'=>3))}
        if(ArticleVideo::destroy(input("videoid"))){
            $this->success("删除文章成功!",url("listsvideo",array('typeid'=>3)),'',0.5);
         }else{
                $this->error("删除文章失败!",url("listsvideo",array('typeid'=>3)),'',0.5);
        }
    }


































































//文章列表页
public function liststype()
    {
        $catid=input('cateId');
         $cate=new CateModel();
        $getallId=$cate->getchildrenidno($catid);
        static $allArtattr=array();
        static $attr=array();
        //循环栏目得到文章所有的id号
        foreach($getallId as $key=>$val){
            $allArtRes=db('article')->where(array('cateid'=>$val))->field('id')->select();
            // dump($allArtRes);
            
            if(empty($allArtRes)){

            }else{
                 
                 foreach($allArtRes as $key1=>$val1){
                    array_push($allArtattr,$val1['id']);
                 }
            }
           
        }

        $allarticleId=implode(',',$allArtattr);
        if($allarticleId==""){
            
            $artres=db("article")->alias("a")->join('cate b','a.cateid=b.id')->field('a.*,b.catename')->where(array('b.id'=>input('cateid')))->paginate(5);

        }else{
    
            $artres=db("article")->where("a.id IN($allarticleId)")->alias("a")->join('cate b','a.cateid=b.id')->field('a.*,b.catename')->paginate(5);
        }




        // $artres=db('cate')->alias("a")->join('article b','a.id=b.cateid')->field("a.catename,b.*")->where(array('type'=>input('typeid')))->where(array('b.cateid'=>$catid))->paginate(8);
        $this->assign('artres',$artres);
        return $this->fetch();

    }


//文章列表页
public function listsadd()
{

    $cate=new cateModel();
        $article=new ArticleModel();
        $cateres=$cate->cateres();
        if(request()->isPost()){
            $data=input("post.");
          
            // 在插入数据之前就插入图片
    //         if($_FILES['thumb']['tmp_name']){
    //                 $thumb = request()->file('thumb');
                  
    //         $info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");
    // $data['thumb']="static/admin/articleimg/".$info->getSaveName();
    //         }
            $data['time']=time();

            if($article->save($data)){

                $this->success('添加文章成功',url('lists'),'',0.5);
            }else{
                $this->error('添加文章失败',url('lists'),'',0.5);
            }
          
            return;
        }
       
        $this->assign("cateres",$cateres);
        return $this->fetch();



}
//文章列表页,这个不怎么用
public function liststypethe()
    {
          
        $cate=new CateModel();
        $getallId=$cate->getchildrenidno(input('cateid'));
        static $allArtattr=array();
        static $attr=array();

        foreach($getallId as $key=>$val){
            $allArtRes=db('article')->where(array('cateid'=>$val))->field('id')->select();
            // dump($allArtRes);
            if(empty($allArtRes)){

            }else{
                 
                 foreach($allArtRes as $key1=>$val1){
                    array_push($allArtattr,$val1['id']);
                 }
            }
           
        }
        $allarticleId=implode(',',$allArtattr);
        if($allarticleId==""){
            
            $artres=db("article")->alias("a")->join('cate b','a.cateid=b.id')->field('a.*,b.catename')->where(array('b.id'=>input('cateid')))->paginate(5);

        }else{
    
            $artres=db("article")->where("a.id IN($allarticleId)")->alias("a")->join('cate b','a.cateid=b.id')->field('a.*,b.catename')->paginate(5);
        }
      
        $this->assign('artres',$artres);
        return $this->fetch();

    }
















}