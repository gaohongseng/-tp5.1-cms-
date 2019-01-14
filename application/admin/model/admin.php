<?php
namespace app\admin\model;
use think\Model;
class admin extends Model
{
	
    public function addadmin($data)
    {
        if(empty($data) || !is_array($data)){
            return false;
        }

        $data['password']=md5(trim($data['password']));
        $adminDate=array();
        $adminDate['name']=$data['name'];
        $adminDate['password']=$data['password'];

        $res=admin::save($adminDate);
       
        if($res){
            $groupAccess['uid']=$this->id;
            $groupAccess['group_id']=$data['group_id'];
            db('auth_group_access')->insert($groupAccess);
            return true;
        }else{
            return false;
        }
    }

    public function getadmin(){
        return $this::paginate(5,false);
    }
  
    public function saveadmin($data,$admins){
             if(!$data['name']){
 // $this->error('管理员用户名不得为空!',url('tp2admin/edit',array('id'=>$data['id'])),'',0.5);
return 2;
             }
         
             if(!$data['password']){
                $data['password']=$admins['password'];
//在这里有个细节就是修改账号没有修改密码那么就是原来的密码
             }else{
//修改了密码就用修改的密码进行加密而不是继续原来的加密的密码再加密
                $data['password']=md5($data['password']);
      
             }

        $adminDate=array();
        $adminDate['name']=$data['name'];
        $adminDate['password']=$data['password'];
        db('auth_group_access')->where(array('uid'=>input("id")))->update(array('group_id'=>$data['group_id']));
   $res=$this::update($adminDate,array('id'=>input('id')));
             return $res;
    }
    public function deladmin($id){
        db('auth_group_access')->where(array('uid'=>input("id")))->delete();
 
        if($this::destroy($id)){
            return 1;
        }else{
            return 2;
        }
    }
//登录模型
     public function login($data)
    {
        $captcha=new \think\captcha\Captcha();
        if(!$captcha->check($data['code'])){
                return 4;
            }


        $admin=$this::getByName($data['name']);
//通过数据库查找有没有这个用户名
        if($admin){
       
            if($admin['password']==md5($data['password'])){
                session('id',$admin['id']);
                session('name',$admin['name']);
                return 1;
            }else{
                 return 2;
            }
           
        }else{
            return 3;
        }
    
    }



    
}