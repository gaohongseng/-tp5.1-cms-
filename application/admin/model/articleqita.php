<?php
namespace app\admin\model;
use think\Model;
class articleqita extends Model
{
 	

	protected static function init(){


 	//更新前
 		articleqita::event('before_update',function($data){

			 if($_FILES['thumb']['tmp_name']){
		        
		       header('Content-Type:text/html;charset=utf-8');
		       $arts=articleqita::get(input("theid"));
		   
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
 			articleqita::event('before_delete',function($data){
 				$arts=articleqita::get(input("theid"));

 				$thumbpath=$_SERVER['DOCUMENT_ROOT'].'/public/'.$arts->thumb;
		   		if(file_exists($thumbpath)){
		   			@unlink('public/'.$arts->thumb);
		   		}

 			});







	}

}