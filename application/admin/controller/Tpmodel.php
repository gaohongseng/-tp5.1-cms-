<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\admin as AdminModel;
use think\db;
class Tpmodel extends TpBase
{
	public function add()
    {
    	$data=input("post.");
    	// dump(config('database.prefix'));

    	$this->add_model($data,'models','tpmodel/lists','添加模型');
    	return view();
    }
    public function edit(){

    	
    	$data=input('post.');
    	$id=input('modelid');
    	$ziduanRes=$this->getziduan('models',$id,'table_name');
    	$modelRes=$this->getfindAll('models',$id);
    	if(request()->isPost()){
             $validate=validate('models');
                if(!$validate->scene('edit')->check($data)){
                 $this->error($validate->getError());die;
            }

    		$this->edit_model($data,'models',$id,$ziduanRes,'table_name','修改模型','tpmodel/lists');
   		}
   		$this->assign([
   			'modelRes'=>$modelRes,
   		]);
    	return view();
    }

    public function lists(){
    	$modelRes=$this->lists_model('models','id desc',5);
    	$prefix=config('database.prefix');
    	$this->assign([
    		'prefix'=>$prefix,
    		'modelRes'=>$modelRes,
    	]);
    	return view();
    }
    //ajax异步修改状态
    public function changestatus(){
        return $this->changestat('models',input('modelid'),'status');
    }
    //删除模型的操作
    public function ajaxdel(){
    	$id=input('id');
    	$table_name=input('table_name');
    	$sql="drop table {$table_name}";
        //删除模型里面记录
    	$del=db('models')->delete($id);
        //删除字段里面记录
        $delfield=db('field')->where('model_id',$id)->delete();
    	db::execute($sql);
    	if($del && $delfield){
    		return 1;
    	}else{
    		return 2;
    	}
    }







    

}