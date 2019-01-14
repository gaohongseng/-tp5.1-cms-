<?php
namespace app\admin\model;
use think\Model;
class auth_rule extends Model
{
	//通过递归找到所有的分类
   public function commonsort($db){
 
   		$catesel=$this->order("sort asc")->select();
   		return $this->sort($catesel,0);
   }

//通过递归找到所有的分类
   public function commonsortpage($db){
 
         $catesel=$this->order("sort asc")->paginate(5);
         return $this->sort($catesel,0);
   }


   public function sort($data,$pid=0){

   		static $attr=array();
   		foreach($data as $k=>$v){
   			if($v['pid']==$pid){
          $v['dataid']=$this->getparentid($v['id']);
   				$attr[]=$v;
   				$this->sort($data,$v['id']);

   			}
   		}
     
   			return $attr;
   }

//这里获取原来的id号
     public function getchildrenid($auid){
         $auleres=$this->select();

         return $this->_getchildrenid($auleres,$auid);
     }

//这里获取当前id所有的子类的id号
     public function _getchildrenid($data,$auid){
         static $attr=array();
         foreach($data as $key=>$val){
            if($val['pid']==$auid){
               $attr[]=$val['id'];
               $this->_getchildrenid($data,$val['id']);
            } 

         }
         return $attr;
    }
    //这里重写一下，是为了实现js交互显示php权限展示

    public function getparentid($auid){

         $auleres=$this->select();
         return $this->_getparentid($auleres,$auid,True);
     }


     public function _getparentid($data,$auid,$clear=false){
         static $attr=array();
         if($clear){
            $attr=array();
         }
         foreach($data as $key=>$val){
            if($val['id']==$auid){
               $attr[]=$val['id'];
               $this->_getparentid($data,$val['pid'],false);
            } 
         }
         asort($attr);
         $attrString=implode('-',$attr);
         return $attrString;
    }




}