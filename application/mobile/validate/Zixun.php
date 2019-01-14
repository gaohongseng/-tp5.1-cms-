<?php
namespace app\index\validate;
use think\Validate;
class Zixun extends Validate
{
	protected $rule = [
        'title'  =>  'require',
        'xinmin'  =>  'require',
        'qq'  =>  'require',
        'youjian'  =>  'require',
        'liuyan'  =>  'require',
    ];
     protected $message  =   [
        'title.require' => '标题名称必须填写',
        'xinmin.require' => '姓名必须填写',
        'qq.require' => '电话号码必须填写',
        'youjian.require' => '电子邮件必须填写',
        'liuyan.require' => '留言内容必须填写',

    ];
      protected $scene = [
    'add' =>  ['title'=>'require','xinmin'=>'require','qq'=>'require','youjian'=>'require','liuyan'=>'require'],
    'edit' => ['title'=>'require','xinmin'=>'require','qq'=>'require','youjian'=>'require','liuyan'=>'require'],
    ];
    
}
