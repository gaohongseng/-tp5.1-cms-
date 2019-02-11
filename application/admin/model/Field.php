<?php
namespace app\admin\model;
use think\Model;
class Field extends Model
{

//关联字段列表,一个模型可以由多个字段,这里写到字段这里去关联
  public function Models(){
  	//规定model_name用于字段列表
      return $this->belongsTo('Models','model_id')->field("model_name,table_name");
   }

}