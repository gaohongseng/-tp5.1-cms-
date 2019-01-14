<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\conf as ConfModel;
class TpConf extends TpBase
{
    

    public function lists()
    {
        
      
        if(request()->isPost()){
            $conf=new ConfModel();
            $sorts=input("post.");
//修改数据表的sort字段的时候存放到数据库中
            foreach($sorts as $key =>$val){

                $conf->update(array("id"=>$key,"sort"=>$val));
            }
        $this->success('更新排序成功',url('tpconf/lists'),'',0.5);
            return;
        }
          $confres=ConfModel::order('sort asc')->paginate(3);
        $this->assign([
            'confres'=>$confres
        ]);
  return $this->fetch();
     
    }

     public function add(){
        $conf=new ConfModel();
        if(request()->isPost()){
            $data=input("post.");
//对提交过来的values进行处理
        if($data['values']){
            $data['values']=str_replace("，",',',$data['values']);
        }
 $add=$conf->save($data);
            if($add){
    $this->success('添加配置项成功!',url('tpconf/lists'),'',0.5);
            }else{
     $this->error('添加配置项失败!',url('tpconf/lists'),'',0.5);
            }
        }
        return $this->fetch();
     }


//删除的方法
     public function del(){
        $del=ConfModel::destroy(input("confid"));
          if($del){
                $this->success('删除配置项成功!',url('tpconf/lists'),'',0.5);
            }else{
                $this->error('删除配置项失败!',url('tpconf/lists'),'',0.5);
            }
     }

//修改
     public function edit(){
        $conf=new ConfModel();
        if(request()->isPost()){
            $data=input("post.");
            $data['values']=str_replace("，",',',$data['values']);
            $save=$conf->save($data,['id'=>input("confid")]);
            if($save){
    $this->success('修改配置项成功!',url('tpconf/lists'),'',0.5);
            }else{
     $this->error('修改配置项失败!',url('tpconf/lists'),'',0.5);
            }
        }
        $confres=confModel::select(input("confid"));
         $this->assign([
            'confres'=>$confres[0]
        ]);


        return $this->fetch();

     }
 
    public function conf(){
        if(request()->isPost()){
            $data=input("post.");
//循环遍历post过来的值并添加到数组formarr中
        $formarr=array();
        foreach($data as $key=>$value){
            $formarr[]=$key;
        }
        $_confarr=db('conf')->field('enname')->select();
//声明一个数组$confarr存放数据库中所有遍历出来的值
        static $confarr=array();
        foreach($_confarr as $k=>$v){
           // $confarr[]=$v['enname'];
           array_push($confarr,$v['enname']);
        }
//拿全部数据库中存在的字段和提交过来的表单的字段进行比较，把不存在的字段放到另一个数组中。
        $checkboxarr=array();
        foreach($confarr as $k=>$v){
            if(!in_array($v,$formarr)){
                $checkboxarr[]=$v;
            }
        }
        //如果存在数组中还没有的值，那么应该清空这个值
        if($checkboxarr){
           
            foreach($checkboxarr as $k=>$v){
                    ConfModel::where(array('enname'=>$v))->update(array("value"=>''));
                
                }
        }
   
            if($data){
                foreach($data as $k=>$v){
                    ConfModel::where(array('enname'=>$k))->update(array("value"=>$v));
                }
        
       $this->success('修改配置项成功!',url('tpconf/conf'),'',0.5);
            }

        



        }
        $confres=ConfModel::order('sort asc')->select();
        $this->assign('confres',$confres);
        return $this->fetch();
    }
}