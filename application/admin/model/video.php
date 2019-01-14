<?php
namespace app\admin\model;
use think\Model;
class video extends Model
{
 	protected static function init(){


 		//新增前
 		video::event('before_insert',function($data){
 			if($_FILES['thumb']['tmp_name']){
                 $thumb = request()->file('thumb');
                 $info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");


  				$comeStr=str_replace('\\','/',$info->getSaveName());
		       $data['thumb']="static/admin/articleimg/".$comeStr;
            }
 		});


 		//更新前
 		video::event('before_update',function($data){

			if($_FILES['thumb']['tmp_name']){
		        
		       
		       $arts=video::get(input("videoid"));
		       $thumbpath=$_SERVER['DOCUMENT_ROOT'].'/public/'.$arts->thumb;
		
		   		if(file_exists($thumbpath)){
		   			@unlink('public/'.$arts->thumb);
		   		}
//上传文件的操作

				$thumb = request()->file('thumb');
		   		$info=$thumb->move(ROOT_PATH."public/static/admin".DS."articleimg");
		   
		      	if($info){
		   
		       $comeStr=str_replace('\\','/',$info->getSaveName());
		       $data['thumb']="static/admin/articleimg/".$comeStr;

		       	}


		    }

 		});



 		//删除前
 			video::event('before_delete',function($data){
 				$arts=video::get(input("videoid"));

 				$thumbpath=$_SERVER['DOCUMENT_ROOT'].'/public/'.$arts->thumb;
		   		if(file_exists($thumbpath)){
		   			@unlink('public/'.$arts->thumb);
		   		}

 			});







 	}

}