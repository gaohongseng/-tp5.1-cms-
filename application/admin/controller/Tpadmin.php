<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\admin as AdminModel;
use app\admin\controller\Auth as Auth;

class Tpadmin extends TpBase
{


    public function lists()
    {
    
        $auth=new Auth();
    
//getGroups得到管理员当前的id号对应的身份的并且status需要为1的rules字段信息,
        $admin=new AdminModel();
    
        $adminres=$admin->getadmin();
        foreach($adminres as $k=>$v){
            $_groupTitle=$auth->getGroups($v['id']);
            $groupTitle=$_groupTitle[0]['title'];
            $v['groupTitle']=$groupTitle;
           
        }
        
      
        $this->assign('adminres',$adminres);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPOST()){
           $data=input("post.");
            $admin=new AdminModel();
            $res=$admin->addadmin($data);
           if($res){
                $this->success("添加管理员成功!",'tpadmin/lists','',0.5);
           }else{
                $this->error("添加管理员失败!",'tpadmin/add','',0.5);  
           }
                
           return ;
        }
        $authGroupRes=db('auth_group')->select();
        $this->assign("authGroupRes",$authGroupRes);
        return $this->fetch();
    }

    public function edit($id)
    {
        //在这里id自动得到
      
        $admins=db('admin')->find($id);
        if(!$admins){
$this->error('该管理员不存在!',url('tpadmin/lists'),'',0.5);
        }
        if(request()->isPost()){

             $data=input("post.");

             $admin=new AdminModel();
             $res=$admin->saveadmin($data,$admins);
             if($res=='2'){
                $this->error('管理员用户名不得为空!',url('tpadmin/edit',array('id',$data['id'])),'',0.5);
             }

             if($res!==false){
                $this->success('修改成功',url('tpadmin/lists'),'',0.5);
             }else{
                $this->error('修改失败',url('tpadmin/lists'),'',0.5);
             }
             return;
        }
        $authGroupAccess=db("auth_group_access")->where(array('uid'=>input("id")))->find();

//得到所有权限的用户
         $authGroupRes=db('auth_group')->select();
        $this->assign([
            'admins'=>$admins,
            'authGroupRes'=>$authGroupRes,
            'authGroupAccess'=>$authGroupAccess,
        ]);
        return $this->fetch();
    }
      public function deladmin($id)
    {
        $admin=new AdminModel();
        $delnum=$admin->deladmin($id);
        if($delnum==1){
$this->success('删除成功',url('tpadmin/lists'),'',0.5);  
        }else{
$this->error('删除失败',url('tpadmin/lists'),'',0.5);  
        }
        return $this->fetch();
    }


    //退出
    public function logout(){
        session(null);
        $this->success("退出系统成功!",url('tplogin/login'));
    }
    
}