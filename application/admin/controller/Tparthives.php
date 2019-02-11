<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\cate as CateModel;
use think\db;
class Tparthives extends TpBase
{

    public function add()
    {
         //自定义字段
        $modelid=input('modelid')?input('modelid'):0;
        $cateid=input('cateid');
        if(request()->isPost()){
            $data=input('post.');

            $columns=array();
            $_columns=db::query('show columns from tpcms_archives');
            foreach($_columns as $v){
                $columns[]=$v['Field'];
            }
            $archives=array();
            $addtable=array();
            $archives['model_id']=input('modelid');
            $archives['create_time']=time();
            $archives['thumb']=$this->add_files('thumb','/static/admin/archives/');
            foreach($data as $k=>$v){
                if(in_array($k,$columns)){
                    if(is_array($v)){
                        $v=implode(',',$v);
                    }
                    $archives[$k]=$v;
                }else{
                    if(is_array($v)){
                        $v=implode(',',$v);
                    }
                    $addtable[$k]=$v;
                }
            }
            $addArchives=db('archives')->insertGetId($archives);
            $addtableName=$this->getziduan('models',input('modelid'),'table_name');
            if($addtableName){
                $addtable['aid']=input('modelid');
                db($addtableName)->insert($addtable);
            }
            $this->add_getid($addArchives,'添加信息','tparthives/lists',array('modelid'=>$modelid,'cateid'=>$cateid));

        }
        $cate=new cateModel();
        $cateres=$cate->cateres();
        $diyField=$this->getselwhereRes('field','sort asc',array('model_id'=>$modelid));
        $longTextField=$this->getselwhereRes('field','sort asc',array('model_id'=>$modelid,'field_type'=>9));

        $this->assign("cateres",$cateres);
        $this->assign([
            'diyField'=>$diyField,
            'longTextField'=>$longTextField,
        ]);
        return $this->fetch();
    }
    public function lists()
    {
        $modelid=input('modelid')?input('modelid'):0;
        $cateid=input('cateid');
        return $this->fetch();
    }


    public function edit()
    {

        if(request()->isPost()){
            

        }
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


}