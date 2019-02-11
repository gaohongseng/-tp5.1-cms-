<?php
namespace app\admin\validate;
use think\Validate;
class Models extends Validate
{
	protected $rule = [
        'model_name'  =>  'require|unique:models',
        'table_name' =>  'require|unique:models',
      

    ];
     protected $message  =   [
        'model_name.require' => '模型名称不能为空!',
        'model_name.unique' => '模型名称不得重复',
        'table_name.require' => '附加表名不能为空!',
        'table_name.unique' => '附加表名不得重复',
      
    ];
    protected $scene=[
        'add'=>['model_name','table_name'],
        'edit'=>['model_name'=>'require','table_name'=>'require'],
    ];
    // protected $scene = [
    // 'add' =>  ['model_name','table_name'],
    // 'edit' => ['model_name','table_name'],
    // ];
}


