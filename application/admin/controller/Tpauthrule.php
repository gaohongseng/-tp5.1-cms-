<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\auth_rule as AuthRule;
class TpAuthRule extends TpBase
{
    
    public function lists()
    {

      if(request()->isPost()){
        $data=input("post.");
        foreach($data as $k=>$v){
          AuthRule::update(array('id'=>$k,'sort'=>$v));
          
        }
        $this->success('更新排序成功',url('lists'),'',0.5);
        return;
      }
        $authrule=new AuthRule;
       $authRuleRes=$authrule->commonsort('auth_rule');
        $this->assign('authRuleRes',$authRuleRes);
        return $this->fetch();
     
    }

     public function add(){
     
        $auth=new AuthRule();
       if(request()->isPost()){
            $data=input("post.");

            $plevel=db('auth_rule')->where(array("id"=>$data['pid']))->find();

            if($plevel){
                $data['level']=$plevel['level']+1;
            }else{
                $data['level']=1;
            }
            
            $add=$auth->save($data);
            if($add){
                $this->success('添加权限成功',url('lists'),'',0.5);
            }else{
                $this->error('添加权限失败',url('lists'),'',0.5);
            }
       }

      $authruleres=$auth->commonsort('auth_rule');

       $this->assign('authruleres',$authruleres);
        return $this->fetch();
     }


//修改
    public function edit(){
     
        $auth=new AuthRule();
       if(request()->isPost()){
            $data=input("post.");
            //查找父级
            $plevel=db('auth_rule')->where(array("id"=>$data['pid']))->find();
            if($plevel){
                $data['level']=$plevel['level']+1;
            }else{
                $data['level']=1;
            }
           //传递过来的pid不能为自己,为自己则清空
           if($data['pid']==input("auid")){
                $data=array();
           }
           if($data['pid']>input("auid")){
                $this->error('当前权限的id值必须大于要移动的权限id值',url('lists'),'',0.5);
           }
           //改变的pid的值必须大于自己原来的值
            $update=$auth->update($data,array('id'=>input("auid")));
            if($update){
                $this->success('修改权限成功',url('lists'),'',0.5);
            }else{
                $this->error('修改权限失败',url('lists'),'',0.5);
            }
       }

//排列出所有
      $authruleres=$auth->commonsort('auth_rule');
      
//查找当前
      $authe=db('auth_rule')->where(array("id"=>input("auid")))->find();


       $this->assign([
        'authruleres'=>$authruleres,
        'authe'=>$authe
       ]);

        return $this->fetch();
     }


 //前置删除操作
    // protected $beforeActionList = [

    //     'desconcate'  =>  ['only'=>'del'],
    // ];


    //删除的方法用这个getchildrenid和列表页以及authgroup控制器的add和edit方法用getchildparent是互相不影响的
     public function del(){
        $auth=new AuthRule();
        $authruleid=$auth->getchildrenid(input("auid"));
        $authruleid[]=input("auid");

        if(AuthRule::destroy($authruleid)){
            $this->success("删除权限成功!",url("lists"),'',0.5);
         }else{
                $this->error("删除权限失败!",url("lists"),'',0.5);
        }

     }

//在这里可以就一起删除了
     // public function desconcate(){
    
     //        $auid=input("auid");
     //        $rule=new AuthRule();
     //        $rulegetid=$rule->getchildrenid($auid);
     //        dump($rulegetid);
     // }
    

 


    
}