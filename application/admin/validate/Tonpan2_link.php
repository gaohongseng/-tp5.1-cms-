<?php
namespace app\admin\validate;
use think\Validate;
class link extends Validate
{
	protected $rule = [
        'title'  =>  'require|max:25',
        'url' =>  'require|max:25',
        'desc' =>  'require|max:25',

    ];
     protected $message  =   [
        'title.require' => '文章标题必须填写',
        'title.max' => '文章标题长度不得大于25位',
        'url.require' => '文章作者必须填写',
        'url.max' => '文章作者长度不得大于25位',
        'desc.require' => '文章栏目必须填写',
        'desc.max' => '文章栏目长度不得大于25位',
      
    ];
      protected $scene = [
    'add' =>  ['title'=>'require','url'=>'require','desc'=>'require']
}
