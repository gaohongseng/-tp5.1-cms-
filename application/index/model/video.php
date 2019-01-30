<?php
namespace app\index\model;
use think\Model;
class video extends Model
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

	public function getchildrenid($catid){
      $data=db("tonpan2_cate")->select();
      $arr=$this->_getchildrenid($data,$catid);
      $arr[]=$catid;
      return $arr;
   }

	public function getchildrenidno($catid){
      $data=db("tonpan2_cate")->select();
      $arr=$this->_getchildrenid($data,$catid);
      return $arr;
   }

   //根据栏目id得到所有文章的操作
	public function getallArtVideo($cateid,$danqian){
	        $allcateid=$cateid;
	        $allcateid[]=$danqian;
	        
	        static $attr=array();
	        foreach($allcateid as $key=>$val){
	          
	            $articleres=db('tonpan2_video')->where(array('cateid'=>$val))->select();

	                foreach($articleres as $key=>$val){

	                   array_push($attr,$val['id']);
	             
	                }
	        }

	        $allarticleId=implode(',',$attr);
	       
	        return $allarticleId;
	}
   public function _getchildrenid($data,$id){
      static $attr=array();
      foreach($data as $key=>$val){
         if($val['pid']==$id){
            array_push($attr,$val['id']);
             $this->_getchildrenid($data,$val['id']);
         }

      }
      return $attr;
      
   }




}