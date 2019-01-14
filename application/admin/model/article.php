<?php
namespace app\admin\model;
use think\Model;
class article extends Model
{
 	protected static function init(){


 		//新增前
 		article::event('before_insert',function($data){
 			if($_FILES['thumb']['tmp_name']){
                 $thumb = request()->file('thumb');
                 $info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");
    $data['thumb']="static/admin/articleimg/".$info->getSaveName();
            }
 		});


 		//更新前
 		article::event('before_update',function($data){

			if($_FILES['thumb']['tmp_name']){
		        
		       
		       $arts=article::get(input("cateid"));
		       $thumbpath=$_SERVER['DOCUMENT_ROOT'].'/public/'.$arts->thumb;
		
		   		if(file_exists($thumbpath)){
		   			@unlink('public/'.$arts->thumb);
		   		}
//上传文件的操作

				$thumb = request()->file('thumb');
		   		$info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");
		    
		      	if($info){
		       $data['thumb']="static/admin/articleimg/".$info->getSaveName();
		       	}


		    }

 		});



 		//删除前
 			article::event('before_delete',function($data){
 				$arts=article::get(input("cateid"));

 				$thumbpath=$_SERVER['DOCUMENT_ROOT'].'/public/'.$arts->thumb;
		   		if(file_exists($thumbpath)){
		   			@unlink('public/'.$arts->thumb);
		   		}

 			});







 	}

}