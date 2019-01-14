<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\cate as CateModel;
use app\admin\model\link as LinkModel;
class Tplink extends TpBase
{
    

    public function lists()
    {
        $link=new linkModel();
        $linkres=$link->linkres();

        if(request()->isPost()){
            $sorts=input("post.");
//修改数据表的sort字段的时候存放到数据库中
            foreach($sorts as $key =>$val){

                $link->update(array("id"=>$key,"sort"=>$val));
            }
        $this->success('更新排序成功',url('tplink/lists'),'',0.5);
            // $this->success('更新排序成功!',url('tpcate/lists'),'',0.5);
            return;
        }
        $this->assign([
            'linkres'=>$linkres
        ]);
  return $this->fetch();
     
    }

     public function add(){
        $link=new linkModel();
        if(request()->isPost()){
            $data=input("post.");
            // $validate = \think\Loader::validate('link');
            // if(!$validate->scene('add')->check($data)){
            //     $this->error($validate->getError()); die;
            // }
 $add=$link->save($data);
            if($add){
    $this->success('删除友情链接成功!',url('tplink/lists'),'',0.5);
            }else{
     $this->error('删除友情链接失败!',url('tplink/lists'),'',0.5);
            }
        }
        return $this->fetch();
     }


//删除的方法
     public function del(){
        $del=LinkModel::destroy(input("linkid"));
          if($del){
                $this->success('删除友情链接成功!',url('tplink/lists'),'',0.5);
            }else{
                $this->error('删除友情链接失败!',url('tplink/lists'),'',0.5);
            }
     }

//修改
     public function edit(){
        $link=new linkModel();
        if(request()->isPost()){
            $save=$link->save(input('post.'),['id'=>input("linkid")]);
            if($save){
    $this->success('修改友情链接成功!',url('tplink/lists'),'',0.5);
            }else{
     $this->error('修改友情链接失败!',url('tplink/lists'),'',0.5);
            }
        }
        $linkres=LinkModel::select(input("linkid"));
         $this->assign([
            'linkres'=>$linkres
        ]);
        return $this->fetch();

     }
 
    
}