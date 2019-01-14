<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\auth_group as AuthGroup;
class TpAuthGroup extends TpBase
{
    

    public function lists()
    {
        $authGroupRes=AuthGroup::paginate(2);
        $this->assign('authGroupRes',$authGroupRes);
        return $this->fetch();
     
    }

     public function add(){
       if(request()->isPost()){
            $data=input("post.");
            if(empty($data['status'])){
                $data['status']=0;
            }else{
                $data['status']=1;
            }
            if($data['rules']){
                $data['rules']=implode(',',$data['rules']);
            }

            $add=db("auth_group")->insert($data);
            if($add){
                $this->success('添加用户组成功',url('lists'),'',0.5);
            }else{
                $this->error('添加用户组失败',url('lists'),'',0.5);
            }
       }
       $authRule=new \app\admin\model\auth_rule();
       //得到所有权限并排序
       $authRuleres=$authRule->commonsort('auth_rule');

       //得到所有权限
       $authRuleparent=$authRule->getparentid(6);
       
        $this->assign('authRuleres',$authRuleres);
        return $this->fetch();
     }


//删除的方法
     public function del(){
       
        if(AuthGroup::destroy(input("gpid"))){
            $this->success("删除用户组成功!",url("lists"),'',0.5);
         }else{
                $this->error("删除用户组失败!",url("lists"),'',0.5);
        }

     }

//修改
     public function edit(){
        
        $authgroup=new AuthGroup();
        $authgpres=$authgroup->find(input("gpid"));
     
        if(request()->isPost()){
            $data=input("post.");
           if(empty($data['status'])){
                $data['status']=0;
            }else{
                $data['status']=1;
            }
            if($data['rules']){
                $data['rules']=implode(',',$data['rules']);
            }


            $edit=$authgroup->save($data,array('id'=>input("gpid")));
            if($edit!==false){
                $this->success('修改用户组成功!',url('tp2authgroup/lists'),'',0.5);
            }else{
                $this->error('修改用户组失败!',url('tp2authgroup/lists'),'',0.5);
            }
        }

        $authRule=new \app\admin\model\auth_rule();
       $authRuleres=$authRule->commonsort('auth_rule');

        $this->assign([
           
            'authgpres'=>$authgpres,
            'authRuleres'=>$authRuleres
        ]);
        return $this->fetch();
     }
 
    
}