<?php
namespace app\admin\model;
use think\Model;
class cate extends Model
{


	//通过递归找到所有的子类
	public function sort($data,$pid=0){
		static $arr=array();
		foreach($data as $key=>$val){

			if($val['pid']==$pid){
			
				$arr[]=$val;
	
				$this->sort($data,$val['id']);
			}
		}
		return $arr;
	}


   public function _getparenid($catid){
      $data=db("cate")->select();
      return $this->getparenid($data,$catid);
   }

   public function getparenid($data,$pid){
      static $attr=array();
      foreach($data as $key=>$val){
         if($val['id']==$pid){
            array_push($attr,$val['pid']);
             $this->getparenid($data,$val['pid']);
         }

      }
      return $attr;
      
   }





public function _getchildrenid($catid){
      $data=db("cate")->select();
      return $this->getchildrenid($data,$catid);
   }

   public function getchildrenid($data,$id){
      static $attr=array();

      foreach($data as $key=>$val){


         if($val['pid']==$id){

            array_push($attr,$val['id']);
             $this->getchildrenid($data,$val['id']);
         }


      }
      return $attr;
      
   }

/*从前端拿过来的代码*/


public function getchildrenidno($catid){
      $data=db("cate")->select();
      $arr=$this->_getchildrenidins($data,$catid);
      $arr[]=$catid;
      return $arr;
   }


   public function _getchildrenidins($data,$id){
      static $attr=array();
      foreach($data as $key=>$val){
         if($val['pid']==$id){
            array_push($attr,$val['id']);
             $this->_getchildrenidins($data,$val['id']);
         }

      }
      return $attr;
      
   }

//通过递归找到所有的分类
   public function cateres(){

   		$catesel=$this->order("sort asc")->select();

   		return $this->sort($catesel,$pid=0);

   }





   protected static function init(){
   //更新前
      cate::event('before_update',function($data){

          if($_FILES['thumb']['tmp_name']){
      
             $arts=cate::get(input("catid"));
             $thumbpath=$_SERVER['DOCUMENT_ROOT'].'/public/'.$arts->thumb;
               if(file_exists($thumbpath)){
            
                  @unlink('public/'.$arts->thumb);
               }
//上传文件的操作
            $thumb = request()->file('thumb');
               $info=$thumb->move(ROOT_PATH."public/static/admin".DS."cateimg");
          
               if($info){
             $data['thumb']="static/admin/cateimg/".$info->getSaveName();
               }
          }

      });
      //删除前
         cate::event('before_delete',function($data){
            $arts=cate::get(input("catid"));

            $thumbpath=$_SERVER['DOCUMENT_ROOT'].'/public/'.$arts->thumb;
           
               if(file_exists($thumbpath)){
                 
                  @unlink('public/'.$arts->thumb);
               }

         });
   }

//关联图片集
   public function arttupian(){
      return $this->hasMany('arttupian','cateid');
   }

//关联文章列表
  public function article(){
      return $this->hasMany('article','cateid');
   }

}