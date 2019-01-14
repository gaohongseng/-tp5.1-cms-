<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\cate as CateModel;
use app\admin\model\article as ArticleModel;
use app\admin\model\video as ArticleVideo;
use app\admin\model\Arttupian as ArttupianModel;
class Tparttupian extends TpBase
{
     public function test(){
        $res=CateModel::hasWhere('ArttupianModel',['id'=>42])->select();
        dump($res);
     
     }
	 public function lists(){
        // $tuRes=CateModel::hasWhere('arttupian',['cateid'=>42])->select();
        $list=CateModel::get(42);
        
        $this->assign("list",$list);
	 	return $this->fetch();
	 }

	 public function add(){
        $cate=new cateModel();
        $arttupian=new ArttupianModel();
        $cateres=$cate->cateres();
        if(request()->isPost()){
            $data=input("post.");
          
            // 在插入数据之前就插入图片
    //         if($_FILES['thumb']['tmp_name']){
    //                 $thumb = request()->file('thumb');
                  
    //         $info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");
    // $data['thumb']="static/admin/articleimg/".$info->getSaveName();
    //         }
            $data['create_time']=time();

            if($arttupian->save($data)){

                $this->success('添加文章成功',url('lists'),'',0.5);
            }else{
                $this->error('添加文章失败',url('lists'),'',0.5);
            }
          
            return;
        }
       
        $this->assign("cateres",$cateres);
        return $this->fetch();
    }
    public function addupload(){
        $arttupian=new ArttupianModel();
        $res=$arttupian->upload($_FILES);
        
    //     $file=$_FILES;

        return $res;
    }
}