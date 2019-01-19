<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\cate as CateModel;
use app\admin\model\article as ArticleModel;
use app\admin\model\video as ArticleVideo;
use app\admin\model\Arttupian as ArttupianModel;
use app\admin\model\Arttusrc as ArttusrcModel;
use app\admin\controller\Upload as Upload;
use think\Cookie;
class Tparttupian extends TpBase
{
      public function addss(){
        $duotu=new \duotuuploads\Duotuupload();
        dump($duotu);
    }
     public function test(){
        $res=CateModel::hasWhere('ArttupianModel',['id'=>42])->select();
        dump($res);
     
     }
	 public function lists(){
        // $tuRes=CateModel::hasWhere('arttupian',['cateid'=>42])->select();
        if(input('typeid')){
             $listcate=CateModel::where('type',3)->select();
        
        }else if(input('cateId')){
 
             $listcate=CateModel::get(input('cateId'));
             //没有参数的情况下也需要有个列表展示
        }else if(empty(input('typeid')) && empty(input('cateId'))){
          
                $listcate=CateModel::where('type',3)->select();
              
        }
        
       
        $this->assign([
            "listcate"=>$listcate,
           
        ]);
	 	return $this->fetch();
	 }
     public function adds(){

        return $this->fetch();
    }
	 public function add(){
        $cate=new cateModel();
        $cateres=$cate->cateres();
        if(request()->isPost()){
            // $data=array([
            //     'title'=>trim(input('title')),
            //     'cateid'=>trim(input('cateid')),
            //     'author'=>trim(input('author')),
            //     'desc'=>trim(input('desc')),
            //     'keywords'=>trim(input('keywords')),
            //     'create_time'=>trim(input('create_time')),
            //     'content'=>trim(input('content')),
            // ]);
            //采用过滤非数据库字段的方式
            $data=input('post.');
            $data['create_time']=time();
            $imgsrc=array('imgfirst'=>trim(input('imgfirst')));
          
            // 在插入数据之前就插入图片
    //         if($_FILES['thumb']['tmp_name']){
    //                 $thumb = request()->file('thumb');
                  
    //         $info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");
    // $data['thumb']="static/admin/articleimg/".$info->getSaveName();
    //         }
            $strimgsrc=$imgsrc['imgfirst'];
            $expimg=explode(',',$strimgsrc);
            $exnbspimg=array();
            

            $arttupian=new ArttupianModel($data);
        
            $tupianRes=$arttupian->allowField(true)->save();
            //添加tusrc
            
            foreach($expimg as $val){
                if($val!=''){
                    $exnbspimg['imgsrc']=$val;
                    $exnbspimg['imgid']=$arttupian->id;
                    $tusrcRes=ArttusrcModel::create($exnbspimg);
                }
                
            }
            if($tupianRes){
                $this->success('添加图集成功',url('tparttupian/lists'),'',0.5);
            }else{
                $this->error('添加图集失败!',url('tparttupian/lists'),'',0.5);
            }
            // if($arttupian->save($data)){

            //     $this->success('添加文章成功',url('lists'),'',0.5);
            // }else{
            //     $this->error('添加文章失败',url('lists'),'',0.5);
            // }
          
        }
       
        $this->assign("cateres",$cateres);
        return $this->fetch();
    }

     public function edit(){
        $cate=new cateModel();
        $cateres=$cate->cateres();
        $arttupianRes=ArttupianModel::get(input('id'));
        $imgstate=empty($arttupianRes->arttusrc)?0:1;
        $uploaddir = '/static/admin/arttupian/ben/';

        if(request()->isPost()){
            $data=input('post.');
            $data['update_time']=time();
            $imgsrc=array('imgfirst'=>trim(input('imgfirst')));

            $strimgsrc=$imgsrc['imgfirst'];
            $expimg=explode(',',$strimgsrc);
            $exnbspimg=array();
            

            $arttupian=new ArttupianModel();
            $tupianRes=$arttupian->allowField(true)->save($data,['id'=>input('id')]);
            //添加tusrc
            
            foreach($expimg as $val){
                if($val!=''){
                    $exnbspimg['imgsrc']=$val;
                    $exnbspimg['imgid']=input('id');
                    $tusrcRes=ArttusrcModel::create($exnbspimg);
                }
                
            }

            if($tupianRes){
                $this->success('更新图集成功',url('tparttupian/lists'),'',0.5);
            }else{
                $this->error('更新图集失败!',url('tparttupian/lists'),'',0.5);
            }



        }
// dump(empty($imgstate));
         $this->assign([
            'cateres'=>$cateres,
            'imgstate'=>$imgstate,
            'arttupianRes'=>$arttupianRes,
            'uploaddir'=>$uploaddir,
        ]);
        return $this->fetch();
    }
    //删除图片集的操作
    public function del(){
        $arttuRes=ArttupianModel::destroy(input('id'));
        $artsrcRes=ArttusrcModel::destroy(['imgid'=>input('id')]);
        if($arttuRes or $artsrcRes){
            $this->success('删除图集成功!',url('tparttupian/lists'),'',0.5);
        }else{
            $this->success('删除图集失败!',url('tparttupian/lists'),'',0.5);
        }
    }

//单独删除图片的操作
    public function editImg(){
        $post=input('post.');
        $res=ArttusrcModel::destroy($post['id']);
        if($res){
            $data['code']=200;
            $data['msg']='删除成功!';
        }else{
            $data['code']=300;
            $data['msg']='删除失败!';
        }

        return $data;
    }
























//增加和修改都用这个函数，有其他好的处理可以修改
    public function webduotuupload(){

         $uploaddir = ROOT_PATH.'public/static/admin/arttupian/ben/';
         //    $uploadfile = $uploaddir.$_FILES['file']['name'];

         //    $info=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);

         //    $dir=$uploaddir.date('YmdHis').rand(1,10000).'.'.$info;

         //    $file=request()->file('file');
         //    $info = $file->move($uploaddir);
              $file = request()->file('file');
              $info=$file->move($uploaddir);
              if($info){
                //这里不用getFilename只得到名字，还要有日期的格式
                $path=$info->getSaveName();
                //反斜杠会乱，存储带日期的
                $path=str_replace('\\','/',$path);
                // $data=json_encode(array('state'=>1,'path'=>$path));
                // $data=json_encode(array('path'=>$path));
              }
             
         
            /* $config = array(
                        'mimes'         =>  array(), 
                        'maxSize'       =>  0, 
                        'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), 
                        'autoSub'       =>  true, 
                        'subName'       =>  array('date', 'Y-m-d'), 
                        'rootPath'      =>  $uploaddir, 
                        'savePath'      =>  $uploaddir,
                      
                );
                $upload = new Upload($config);
            
                $info   = $upload->upload();*/
        
                // if(!$info) {
                     
                //     $this->error($upload->getError());// 上传错误提示错误信息
                     
                // }else{
                // 上传成功
                    /*
                     * 分离缩略图和轮播图
                     */
                    //dump($info);
                    // foreach ($info as $va){
                        
                    //     if ($va['key']=="suoluetu"){
                    //         $suoluetu.="Public/Uploads/luxian/".$va['savepath'].$va['savename']."||";
                    //     }else {
                    //         $lunbotu.="Public/Uploads/luxian/".$va['savepath'].$va['savename']."||";
                    //     }
                    // }
                    // 
                    // 

        return $path;
    }








































































    public function addupload(){
        // $arttupian=new ArttupianModel();

       
        // $res=$arttupian->upload();
     
       
        // dump(Env::get('root_path'));die;
    //     $file=$_FILES;
        $uploaddir = Env::get('root_path').'public/static/admin/arttupian/yuan/';
        // $info=date('YmdHis').rand(1,100000).'.'.pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
     
        // $filename=$uploaddir.$_FILES['file']['name'];
        // $res=move_uploaded_file($_FILES['file']['tmp_name'],$uploaddir.$info);
        
        $uploadfiles=request()->file('file');
        $uploadinfo=$uploadfile->move($uploaddir);
        if($uploadinfo){
            $res=$uploadinfo->getSaveName();
        }else{
            $res=1;
        }

        return $res;
        // $i=1;
        // if($res){
        //     $i++;
        //     dump(json_encode($res));

        // }
        die;
        
       
        // foreach($uploadfiles as $uploadfile){
        //     $uploadinfo=$uploadfile->move($uploaddir);
            // if($uploadinfo){
            //     echo $uploadinfo->getFilename();
            // }
            
        // }
        // $uploadinfo=$uploadfiles->move($uploaddir);
        // dump($uploadinfo->getFilename());
        // 
/*使用原生的写法*/ 
        

        $re=json_encode($data);

        return $re;
    }
    public function uploadsubmit(){
        return input('post.');
    }
    public function addsupload(){
        if(request()->isPOST()){
            $uploaddir = 'uploads/';
            $uploaddir = Env::get('root_path').'public/static/admin/arttupian/ben/';
            $uploadfile = $uploaddir.$_FILES['file']['name'];

            $info=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
//取得图片的后缀
            $dir=$uploaddir.date('YmdHis').rand(1,10000).'.'.$info;
//要移动的文件,文件的新位置
dump(json_encode($dir));die;
            $dirs=$_SERVER['DOCUMENT_ROOT'].'/static/admin/arttupian/ben/'.date('YmdHis').rand(1,10000).'.'.$info;

    $flag=move_uploaded_file($_FILES['file']['tmp_name'],$dirs);

            if($flag){
               echo 'yes';
               die;
                $re['dir']='/'.$dir;
                $re['msg']="上传成功";
                dump($re);
    // 　　　　       $re['status']=200;
                // echo json_encode($re);
            }else{
              
                $re['msg']="上传成功";
                // echo json_encode($re);
            }
        }
    }


   


//多图上传的方法
     public function webduotu(){
            
                // $upload = new \think\Upload($config);
                 
                
                // $info   =   $upload->upload();
                




                // if(!$info) {
                     
                //     $this->error($upload->getError());// 上传错误提示错误信息
                     
                // }else{
                // 上传成功
                    /*
                     * 分离缩略图和轮播图
                     */
                    //dump($info);
                    // foreach ($info as $va){
                        
                    //     if ($va['key']=="suoluetu"){
                    //         $suoluetu.="Public/Uploads/luxian/".$va['savepath'].$va['savename']."||";
                    //     }else {
                    //         $lunbotu.="Public/Uploads/luxian/".$va['savepath'].$va['savename']."||";
                    //     }
                    // }
                return $this->fetch();
    }

    


}