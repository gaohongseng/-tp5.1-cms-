<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\cate as CateModel;
use app\admin\model\article as ArticleModel;
class Tpcate extends TpBase
{
    

    public function lists()
    {

        $cate=new cateModel();
        $cateres=$cate->cateres();
        if(request()->isPost()){
            $sorts=input("post.");

            foreach($sorts as $key =>$val){

                db('cate')->update(array("id"=>$key,"sort"=>$val));
            }
        $this->success('修改成功',url('tpcate/lists'),'',0.5);
            // $this->success('更新排序成功!',url('tpcate/lists'),'',0.5);
            return;
        }
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }

     public function add(){
        $cate=new CateModel();
        $cateres=$cate->cateres();
        if(request()->isPost()){
            $data=input("post.");
            $plevel=explode(",",$data['pid']);
            $data['pid']=$plevel[0];
            $data['level']=$plevel[1]+1;
            if($_FILES['thumb']['tmp_name']){
                $file=request()->file('thumb');
                $info=$file->rule("date")->move(ROOT_PATH.'public/static/admin'.DS.'cateimg');
                $data['thumb']='/static/admin/cateimg/'.$info->getSaveName();
            }

            $add=$cate->save($data);
            if($add){
                $this->success('添加栏目成功!',url('tpcate/lists'),'',0.5);
            }else{
                $this->error('添加栏目失败!',url('tpcate/lists'),'',0.5);
            }
        }
         
        $this->assign('cateres',$cateres);
        return $this->fetch();
     }


//删除的方法
     public function del(){

        
          if(CateModel::destroy(input('catid'))){
                $this->success('删除栏目成功!',url('tpcate/lists'),'',0.5);
            }else{
                $this->error('删除栏目失败!',url('tpcate/lists'),'',0.5);
            }
     }

//修改
     public function edit(){
        $cate=new CateModel();
        $cateres=$cate->cateres();
        $cates=$cate->find(input("catid"));
        if(request()->isPost()){
            $data=input("post.");
            $plevel=explode(",",$data['pid']);
            $data['pid']=$plevel[0];
            $data['level']=$plevel[1]+1;
            $data['id']=input("catid");

            if($data['pid']==input("catid")){
     $this->error('不能指定当前栏目!',url('tpcate/lists'),'',0.5);die;
            }
            $add=$cate->update($data);
            if($add){
                $this->success('修改栏目成功!',url('tpcate/lists'),'',0.5);
            }else{
                $this->error('修改栏目失败!',url('tpcate/lists'),'',0.5);
            }
        }
        $this->assign([
            'cateres'=>$cateres,
            'cates'=>$cates
        ]);
        return $this->fetch();
     }









































     
     //前置操作
    protected $beforeActionList = [

        'desconcate'  =>  ['only'=>'del'],
    ];
     public function desconcate(){
            $catid=input("catid");
            $cate=new CateModel();
            $catgetid=$cate->_getchildrenid($catid);
            $allcateid=$catgetid;
            $allcateid[]=$catid;

            static $allArtId=array();
            static $allArtTwoId=array();
            foreach($allcateid as $key=>$val){
                $artAllResId=db('article')->where(array('cateid'=>$val))->field('id')->select();
                 
                 $allArtId[]=$artAllResId;

            }
          
                foreach($allArtId as $key=>$val){
   
                    foreach($val as $key1=>$val1){
                      
                        foreach($val1 as $key2=>$val2){
                            $allArtTwoId[]=$val2;
                        }
                    }
                    
                 }

        //如果没有传递过来catid或者传入错误的catid的值
        $res=db('cate')->find(input('catid'));

        // dump($allArtTwoId);

  

//如果没有传递过来catid的值
                if(input('catid')==null){
                    return false;
//如果这个id里面压根就没有文章，查到结果为空
                }else if(empty($allArtTwoId)){
                    return false;
//如果查到文章结果为空;
                }else if($res==null){
                     return false;
                }else{
                    ArticleModel::destroy($allArtTwoId);
                }
        //如果传递过来错误的catid的值，那么明显没有文章
                // if(empty($allArtTwoId)){
                //     return false;
                // }else{
                //      ArticleModel::destroy($allArtTwoId);
                // }
 

            if($catgetid){
                db("cate")->delete($catgetid);
            }
     }
    
}