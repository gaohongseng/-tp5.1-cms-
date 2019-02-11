<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Field;
use think\db;
class Tpfield extends TpBase
{
     public function add(){
        $field=new Field();
        $modelres=$this->getselRes('models','id desc');
        if(request()->isPost()){
             $data=input("post.");
             $tableName=config('database.prefix').$this->getziduan('models',$data['model_id'],'table_name');
             $add=$this->add_fieldModel($data,$field,'tpfield/lists','添加字段','field_type','field_ename',$tableName,'add','field_values');

//对提交过来的values进行处理
//字段类型:1单行文本,2多行文本,3单选按钮,4复选框,5下拉菜单,6附件,7浮点,8模型,9长文本类型

            // $this->add_cateModel($data,$field,'tpfield/lists','添加配置项');
        }
         $this->assign([
            'modelres'=>$modelres
        ]);
        return $this->fetch();
     }
     //修改字段
     public function edit(){
        $modelres=$this->getselRes('models','id desc');
        //得到栏目的id号
        //得到当前栏目信息
        $field=new Field();
        $fields=Field::get(input('fieldid'));
        if(request()->isPost()){
             $data=input("post.");
             $tableName=config('database.prefix').$this->getziduan('models',$fields['model_id'],'table_name');
             $data['model_id']=$fields['model_id'];
             $this->add_fieldModel($data,$field,'tpfield/lists','修改字段','field_type','field_ename',$tableName,'change','field_values',array('id'=>input('fieldid')),$fields['field_ename']);
        }


        $this->assign([
            'modelres'=>$modelres,
            'fields'=>$fields,
        ]);
        return $this->fetch();
    }





     public function lists(){
        $fieldRes=Field::order('sort asc')->paginate(5);
    $this->sortRes(input('post.'),'field','sort','字段排序','tpfield/lists');

         $this->assign([
            'fieldRes'=>$fieldRes
        ]);
        return $this->fetch();
     }

      //删除字段的操作
    public function ajaxdel(){
        $field_id=input('fieldid');
        $table_name=config('database.prefix').input('table_name');
        $field_name=input('field_name');
        $del=Field::destroy($field_id);
        $sql="alter table {$table_name} drop column {$field_name}";
        db::execute($sql);
        if($del){
            return 1;
        }else{
            return 2;
        }
        // $del=db('field')->delete($id);
      
        // $delfield=db('field')->where('model_id',$id)->delete();
        // if($del && $delfield){
        //     return 1;
        // }else{
        //     return 2;
        // }
    }

}