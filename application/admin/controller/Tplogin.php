<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\admin as AdminModel;
class Tplogin extends Controller
{
	public function login()
    {

 		$data=input('post.'); 

        if(request()->isPost()){
          // $this->check(input("code"));

          $login=new AdminModel();
          $res=$login->login($data);
          

    


       if($res==1){
  $this->success('信息正确!正在调整....',url('tpindex/index'),'',0.5);  

       }elseif($res==4){
$this->error('验证码错误','tplogin/login','',0.5);
       }else if($res==2){
    $this->error('密码错误!',url('tplogin/login'),'',0.5);     
       }else if($res==3){
        $this->error('用户名不存在!',url('tplogin/login'),'',0.5);

       }
   }
       
        return $this->fetch();
    }


    public function check($code){

      if(!captcha_check($code)){
          $this->error('验证码错误!',url('login'),'',0.5);
      }else{
          return true;
      }
    }
}