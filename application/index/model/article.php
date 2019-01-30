<?php
namespace app\index\model;
use think\Model;
class article extends Model
{


/*普通的上一页*/
    public function preArticle($table,$artid){
      return db($table)->where('id','<',$artid)->order('id desc')->limit(1)->find();
       
    }

/*普通的下一页*/
    public function nextArticle($table,$artid){
       return db($table)->where('id','>',$artid)->order('id asc')->limit(1)->find();
    
    }


   }