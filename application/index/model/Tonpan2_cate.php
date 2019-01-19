<?php
namespace app\index\model;
use think\Model;
class Tonpan2_cate extends Model
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

//分割

   public function getchildrenid($catid){
      $data=db("tonpan2_cate")->select();

      $arr=$this->_getchildrenid($data,$catid);
      $arr[]=$catid;
      return $arr;
   }

//不分割
public function getchildrenidno($catid){
      $data=db("tonpan2_cate")->select();
      $arr=$this->_getchildrenid($data,$catid);
       
      return $arr;
   }

//热门文章的调用

 public function artNews($num){
        return db('tonpan2_article')->order('id desc')->paginate($num);
    }

//热点内容
    public function artHot($num){

        return db('tonpan2_article')->order('click desc')->paginate($num);
    }

//根据栏目id得到所有文章的操作
public function getallArt($cateid,$danqian){
        $allcateid=$cateid;
        $allcateid[]=$danqian;
        static $attr=array();
        foreach($allcateid as $key=>$val){
          
            $articleres=db('tonpan2_article')->where(array('cateid'=>$val))->select();

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



   //得到父级id (包含自己)
    public function _getparentid($catid){
      $data=$this->field('id,pid,catename')->select();
      $pcate=$this->find($catid);
      $pid=$pcate['pid'];
     
      if($pid){
         $attr=$this->getparentid($data,$pid);
      }
      //新增的元素会处于元素的第一级
      $attr[]=$pcate;
      return $attr;
   }
//根据文章得到当前位置
    public function _getparentidart($catid){
      $data=$this->field('id,pid,catename')->select();
      $art=db('tonpan2_article')->field('cateid')->find($catid);
      $pcate=$this->find($art['cateid']);
      $pid=$pcate['pid'];
     
      if($pid){
         $attr=$this->getparentid($data,$pid);
      }
      //新增的元素会处于元素的第一级
      $attr[]=$pcate;
      return $attr;
   }



//得到父级id (不包含自己)
public function _getnoparid($catid){
      $data=$this->field('id,pid,catename')->select();

      $pcate=$this->find($catid);

      $pid=$pcate['pid'];

      if($pid){
         $attr=$this->getparentid($data,$pid);
      }


      //新增的元素会处于元素的第一级
       $attr[]=$pcate;
      return $attr;
   }

   public function getparentid($data,$pid){
      static $attr=array();
      foreach($data as $key=>$val){

         if($val['id']==$pid){
//所有元素的id里面找这个id号,一直找这个元素的pid父级id
//这一步可以不看，可以是$val['id'],或者是$val
            array_push($attr,$val);

             $this->getparentid($data,$val['pid']);
         }

      }
      return $attr;
   }







 //找当前的child，不含父级
public function getthechild($catid){
      $data=db("tonpan2_cate")->select();
      $arr=$this->_getthechild($data,$catid);
      $arr[]=$catid;
      return $arr;
   }

public function _getthechild($data,$id){
      static $attr=array();
      foreach($data as $key=>$val){
         if($val['pid']==$id){
            array_push($attr,$val['id']);

             $this->_getthechild($data,$val['id']);
         }

      }
      return $attr;
      
   }





//找当前的child，不含父级
public function getthebasechild($catid){
      $data=db("tonpan2_cate")->select();
      $arr=$this->_getthebasechild($data,$catid);
      $arr[]=$catid;
      return $arr;
   }

public function _getthebasechild($data,$id){
      static $attr=array();
      foreach($data as $key=>$val){
         if($val['pid']==$id){
            array_push($attr,$val['id']);

             $this->_getthebasechild($data,$val['id']);
         }

      }
      return $attr;
      
   }



//根据栏目id得到所有文章的操作
public function getallbaseArt($cateid,$danqian){
        $allcateid=$cateid;
        $allcateid[]=$danqian;
        static $attr=array();
        foreach($allcateid as $key=>$val){
          
            $articleres=db('tonpan2_article')->where(array('cateid'=>$val))->select();

                foreach($articleres as $key=>$val){

                   array_push($attr,$val['id']);
             
                }
        }
        $allarticleId=implode(',',$attr);
        return $allarticleId;
}



    

}