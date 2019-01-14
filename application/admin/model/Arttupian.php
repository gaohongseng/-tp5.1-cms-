<?php
namespace app\admin\model;
use think\Model;
class Arttupian extends Model
{
 	public function upload($file){

	    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/static/admin/arttupian/yuan/';
	    // $uploadfile = $uploaddir.$file['file']['name'];
	    // if (move_uploaded_file($file['file']['tmp_name'],$uploaddir.$file['file']['name'])) {
	    //     return 1;
	    // } else {
	        
	    //     return 2;
	    // }

 	}

 	

}