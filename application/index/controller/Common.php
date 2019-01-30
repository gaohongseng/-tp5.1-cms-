<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\model\cate as CateIndex;
use \app\admin\model\cate as CateModel;
class Common extends Controller
{


//SQLSTATE[42S02]: Base table or view not found: 1146 Table 'tp5cms4.cate' doesn't exist
//牢记这个错误，你要指定数据库前缀，小老弟，困了半个小时
    public function getNav($prefix='getNav'){

        $cate=new CateModel();
        $$prefix=$cate->where('rec_index','>=',1)->order('sort asc')->select();

        $this->assign([
          "$prefix"=>$$prefix
        ]);
    }

//得到当前以及当前子栏目下所有文章，前缀我只是用来方便显示子栏目数据，不想用直接用getManFuture
  public function getFuture($prefix,$cateid,$leixin,$num=''){
      $lisId=$prefix.'cateId';
      //为空给默认值主栏目值
      $$lisId=empty(input($prefix.'cateId'))?$cateid:input($prefix.'cateId');
      $getzi=$this->getcateAllzi($cateid);
      $sheji=$prefix.'Res';
      //判断当前id值是否和目标父级id一致，一致为父，不一致为子
      $cate=new CateModel();
      if($$lisId==$cateid){
            $$sheji=$cate->$leixin()->where("cateid IN($getzi)")->paginate($num);
           
      }else{
            $$sheji=$cate->$leixin()->where('cateid',input($prefix.'cateId'))->paginate($num);
             
      }

      return $$sheji;

  }

   //另外一种情况，直接调用所有的栏目文章
  public function getManFuture($cateid,$leixin='article',$num=''){
      $cate=new CateModel();
      $getzi=$this->getcateAllzi($cateid);
      // dump($cate->$leixin()->where("cateid IN($getzi)")->paginate($num));
      return $cate->$leixin()->where("cateid IN($getzi)")->paginate($num); 
  }
  //调用分类集合包括自己，主要用于查询所有文章
  public function getcateAllzi($cateid){
      $cateIndex=new cateIndex();
      $cateIndexRes=$cateIndex->getchildrenid($cateid); 

      $cateImp=implode(',',$cateIndexRes);
     
      return $cateImp;
  }

  //这个函数暂时没用
   public function getcatenoAllzi($cateid){
      $cateIndex=new cateIndex();
      $cateIndexRes=$cateIndex->getchildrenidno($cateid); 
      $cateImp=implode(',',$cateIndexRes);
      return $cateImp;
  }

  //这种想通过->arttupian返回不了对象,因为需要事先关联，不能事后
  public function getManObj($cateid){
      $cate=new CateModel();
      $cateIndex=new cateIndex();
      $cateIndexRes=$cateIndex->getchildrenid($cateid); 
      $cateImp=implode(',',$cateIndexRes);
      return $cate->where("id IN($cateImp)");
  }

  //获取所有栏目的id号
  public function getnoFuture($cateid){
      $cate=new CateModel();
      $cateIndex=new cateIndex();
      $cateIndexRes=$cateIndex->getchildrenid($cateid); 
   
      $cateImp=implode(',',$cateIndexRes);
      return $cateImp; 
    
  }
  //通过前缀控制查询上一篇和下一篇以及当前页的所有内容的封装
  public function getArtRes($prefix,$cateid,$leiId,$leixin='article'){
      $lisId=$prefix.$leiId;
 
      $cate=new CateModel();
      $cateIndex=new cateIndex();
      $cateIndexRes=$cateIndex->getchildrenid($cateid); 
   
      $cateImp=implode(',',$cateIndexRes);
      $shang=$prefix.'Prev';
      $xia=$prefix.'Next';
      $the=$prefix.'The';
      //这里有点关键,得到栏目所有id
      $cateCount=$cate->where("id IN($cateImp)")->column('id');
      $cateImp=implode(',',$cateCount);

      //下一篇的文章，可以直接用db类
      $$xia=db($leixin)->where("cateid IN($cateImp)")->where('id','>',input($prefix.$leiId))->order('id asc')->limit(1)->field('id,title')->select();
      //低级错误，需要关联另外一个表，不用db类
      $$the=$cate->$leixin()->where('id',input($prefix.$leiId))->find();
      //上一篇的文章
      $$shang=db($leixin)->where("cateid IN($cateImp)")->where('id','<',input($prefix.$leiId))->order('id desc')->limit(1)->field('id,title')->select();
      $this->assign([
        "$shang"=>$$shang,
        "$xia"=>$$xia,
        "$the"=>$$the
      ]);

  }

   //完全多余的代码，通过前缀控制查询上一篇和下一篇以及当前页的所有内容的封装 (图片集)
  // public function getTuRes($prefix,$cateid){
  //     $lisId=$prefix.'imgId';
  //     $cate=new CateModel();
  //     $tulis=new \app\admin\model\Arttupian();
  //     $cateIndex=new cateIndex();
  //     $cateIndexRes=$cateIndex->getchildrenid($cateid); 
 
  //     $cateImp=implode(',',$cateIndexRes);
  //     $shang=$prefix.'Prev';
  //     $xia=$prefix.'Next';
  //     $the=$prefix.'The';
  //     $cateCount=$cate->where("id IN($cateImp)")->column('id');
  //     $cateImp=implode(',',$cateCount);
  //     $$xia=db('arttupian')->where("cateid IN($cateImp)")->where('id','>',input($prefix.'imgId'))->order('id asc')->limit(1)->field('id,title')->select();
  //     $$the=$tulis->where('id',input($prefix.'imgId'))->find();
  //     $$shang=db('arttupian')->where("cateid IN($cateImp)")->where('id','<',input($prefix.'imgId'))->order('id desc')->limit(1)->field('id,title')->select();

  //     $this->assign([
  //       "$shang"=>$$shang,
  //       "$xia"=>$$xia,
  //       "$the"=>$$the
  //     ]);

  // }


  // 封装得到当前导航栏无本身栏目的操作,并且获取当前栏目id号和名字
  public function getCateNav($prefix,$cateid){
        $cateIndex=new cateIndex();
        $cate=new CateModel();
        $cateIndexno=$cateIndex->getchildrenidno($cateid);
        $cateImpno=implode(',',$cateIndexno);
        $noNavs=$cate->where("id IN($cateImpno)")->select();
        $lis=$prefix.'nav';
        $$lis=$cate->where('id',$cateid)->select();
        $this->assign([
            "$lis"=>$$lis,
        ]);
        return $noNavs;
  }
  //封装最简单的封面页
  public function getFenmian($id){
    $cate=new CateModel();
    $fenmianRes=$cate->where('id',$id)->find();
    return $fenmianRes;
  }
  //封装banner的函数，默认与大栏目banner的显示
  public function getBanner(){
    $cate=new CateModel();
    $banner=$cate->where('id',input('navId'))->value('thumb');
    $banner=str_replace('\\','/',$banner);
     $this->assign([
            "banner"=>$banner,
     ]); 
  }
  //封装当前位置的函数,有栏目以及文章的当前位置判断
  public function getPosition(){
     //思路，在浏览器中找到相关参数即可
     $posArr=$this->getstrpos(input(''));
     is_string($posArr)?$posArr='':$posArr=$this->assign(['getPos'=>$posArr]);
     // empty($posArr)?'': $this->assign(['getPos'=>$posArr,]);
  }
  public function getstrpos($_get){
     $cate=new CateModel();
     $cateIndex=new CateIndex();
     $attr=array();
     foreach($_get as $key=>$val){
        if(!$val){
           unset($_get[$key]);
        }else{
          //判断英文
      $allen = preg_match("/^[^\x80-\xff]+$/",$key);  
      //判断中文
      $allcn = preg_match("/^[".chr(0xa1)."-".chr(0xff)."]+$/",$key);  
      //网址全是英文的键，这种符合规矩
          if($allen){  
                if(is_numeric($val)){
                  //都要判断到位
                    if(strpos($key,'cate') or strpos($key,'art') or strpos($key,'img')){
                      $attr=$this->getpageOr($key,$val);
                    }
                }else{

            //网址中有英文键但字母但非数字
                }
                
          }else{  
                if($allcn){  
                    //网址全是中文的键
                }else{  

                   //网址有中文的键，不全中文不全英文
                }  
          }  
        }
     }
    // dump($attr);
    
     return $attr;
  }
  //判断分页还是没分页
  public function getpageOr($key,$val){
          $cate=new CateModel();
          $cateIndex=new cateIndex();
         if(strpos($key,'cate')!==false){
              $posArr=$cateIndex->_getparentid($val);
          }else if(strpos($key,'art')!==false){
              $catId=$cate->article()->where('id',$val)->value('cateid');
              $posArr=$cateIndex->_getparentid($catId);
          }else if(strpos($key,'img')!==false){
              $catId=$cate->arttupian()->where('id',$val)->value('cateid');
              $posArr=$cateIndex->_getparentid($catId);
          }
          return $posArr;
  }

   //得到当前一个栏目的位置,
   //首先得到当前栏目号，如果是子栏目，还有父栏目，应该用父栏目包含自己的所有栏目
   //如果是顶级栏目，不影响
   //
   //
   //
  



//手机站另外一种当前位置
  public function getnavPosition($prefix,$_get){

    $cate=new CateModel();
    $cateIndex=new CateIndex();
         //赋初值
    $dinglan='';
    $danglan='';
    $navlan='';

     foreach($_get as $key=>$val){
        if(!$val){
           unset($_get[$key]);
        }else{
          //判断英文
      $allen = preg_match("/^[^\x80-\xff]+$/",$key);  
      //判断中文
      $allcn = preg_match("/^[".chr(0xa1)."-".chr(0xff)."]+$/",$key);  
      //网址全是英文的键，这种符合规矩
          if($allen){  
                if(is_numeric($val)){
                    
                        if(strpos($key,'cate')!==false){
                            $danglan=$cate->find($val);
                            $parid=$cateIndex->_getparentsid($val);
                            $parid=is_string($parid)?$parid:implode(',',$parid);
                            $dinglan=$cate->find($parid);


                             if($parid!=$val){
                                $getcatezi=$this->getcateAllzi($parid);
                             }else{
                                $getcatezi=$this->getcateAllzi($val);
                             }
                             $navlan=$cate->where("id IN($getcatezi)")->select();

                        }else if(strpos($key,'art')!==false){
                            $catId=$cate->article()->where('id',$val)->value('cateid');
                            $danglan=$cate->find($catId);


                            $parid=$cateIndex->_getparentsid($catId);
                          if($parid[0]){
                               $paridString=$parid[0];
                            }else{
                               $paridString=$parid;
                            }
                            // $parid=is_string($parid)?$parid:implode(',',$parid);
                            $dinglan=$cate->find($parid);
                             
                             if($paridString!=$catId){
                                $getcatezi=$this->getcateAllzi($paridString);
                             }else{
                                $getcatezi=$this->getcateAllzi($catId);
                             }
                             $navlan=$cate->where("id IN($getcatezi)")->select();



                        }else if(strpos($key,'img')!==false){

                            $catId=$cate->arttupian()->where('id',$val)->value('cateid');
                            $danglan=$cate->find($catId);



                            $parid=$cateIndex->_getparentsid($catId);
                            if($parid[0]){
                               $paridString=$parid[0];
                            }else{
                               $paridString=$parid;
                            }
                     
                            $dinglan=$cate->find($parid);

                       
                             if($paridString!=$catId){
                                $getcatezi=$this->getcateAllzi($paridString);
                             }else{
                                $getcatezi=$this->getcateAllzi($catId);
                             }
    
                             $navlan=$cate->where("id IN($getcatezi)")->select();


                        }



                    
                }else{

            //网址中有英文键但字母但非数字
                }
                
          }else{  
                if($allcn){  
                    //网址全是中文的键
                }else{  

                   //网址有中文的键，不全中文不全英文
                }  
          }  
        }
     }


    $dang=$prefix.'Dang';
    $ding=$prefix.'Ding';
    $nav=$prefix.'Pos';




    $$nav=$navlan;
    $$ding=$dinglan;
    $$dang=$danglan;





    $this->assign([
      "$nav"=>$$nav,
      "$ding"=>$$ding,
      "$dang"=>$$dang,
    ]);
    

  } 

  

    //手机站用于到任何位置都能调用包含自身的所有父栏目和子栏目
   //1,当前栏目和查出栏目是一个栏目，不用判断
   //2，当前栏目有子栏目，查出栏目比当前栏目多一些栏目，判断
   //3，当前栏目是子集栏目，不能查出他的字栏目，但能查父栏目
   //4，当前栏目是当前栏目，查出所有栏目
  public function getAllnavzi($cateid){
     $cate=new CateModel();
     $cateIndex=new CateIndex();
     // $parid=$cate->where('')

     $parid=$cateIndex->_getparentsid($cateid);
     //理论这是一个值
     $parid=is_string($parid)?$parid:implode(',',$parid);
     // $$prefix=db('cate')->where('id',$parid)->value('catename');
     //父级栏目不是当前栏目用父级栏目，不然用当前
     if($parid!=$cateid){
        $getcatezi=$this->getcateAllzi($parid);
     }else{
        $getcatezi=$this->getcateAllzi($cateid);
     }

     // $this->assign([
     //    ''
     // ]);
     return $cate->where("id IN($getcatezi)")->select();
     
  }



  //封装显示标签的函数
  public function showTag($sortid,$length){

      $tag=new \app\admin\model\tag();
      $tagMan=$tag->where('sort','<=',$sortid)->order("sort desc")->limit($length)->column('fenge');
      return $tagMan;
  }
  //封装搜索单个的结果
  public function getkeyResult($prefix,$key,$catid,$sou,$leixin='article',$num=''){
      $result=$prefix.'search';
      $count=$prefix.'searchlen';
      // $cate=new CateModel();
      //得到这个栏目的所有子id及自身
      $getimpId=$this->getnoFuture($catid);
      $artRes=$this->getkeycs($getimpId,$key,$sou,$leixin)->count();
      empty($artRes)?$$result=0:$$result=$this->getkeycs($getimpId,$key,$sou,$leixin)->paginate($num,false,['query'=>request()->param()]);
      empty($artRes)?$$count=0:$$count=$artRes;
      $this->assign([
          "$result"=>$$result,
          "$count"=>$$count,
      ]);
  }
  //返回条数或记录
  public function getkeycs($imp,$key,$sou,$leixin='article'){
      $cate=new CateModel();
      return $cate->$leixin()->where("cateid IN($imp)")->where($sou,'like','%'.$key.'%')->order('id asc');
  }
 //判断筛选条件,为空就用原来的,这里有分页page也需要随时过滤
  public function getsaiCount($url){
    $url=$this->getfilterKong($url);
    //没有参数，有个page参数  1
    //有1个条件，2个条件，条件加分页  2
    //没有page就清空用1，有page就在原来基础上-1
    if(empty($url['page'])){
        $attr=count($url)?$url:'';   
    }else{
        $attr=count($url)-1?$url:'';
    }
     return $attr;
  }
  //过滤网址空,去掉字段,
  public function getfilterKong($url,$ziduan='gaohongseng'){
    foreach($url as $k=>$v){
      if(!$v){
        unset($url[$k]);
      }

    }
    $ziExp=explode(',',$ziduan);
    foreach($ziExp as $key=>$val){
        if(array_key_exists($val,$url)){
          unset($url[$ziduan]);
        }      
    }
    // array_key_exists($ziduan,$url)?unset($url[$ziduan]);
    
    return $url;
  }
  //like的循环条件拼装
  public function getlikeFor($why,$field='desc',$where){
      $condition[$field]=array($where);
       foreach($why as $key=>$value){
      //过滤掉page参数
           array_unshift($condition[$field],array('like','%'.$value.'%'));
      }
        return $condition;
  }
  //封装搜索筛选的结果
 public function getsaiResult($why,$cateid,$field='desc',$leixin='arttupian',$where='and',$num='',$ziduan=''){
    $cate=new CateModel();
    //2种形式，一种url参数，一种手动传递
   
    if(is_string($why)){
        $why=explode(',',$why);
        $condition=$this->getlikeFor($why,$field,$where);
    }else{
        $why=$this->getfilterKong($why,'page');
        $condition=$this->getlikeFor($why,$field,$where);
        //过滤字段
        $attrs=$this->getfilterKong(request()->param(),$ziduan);
    }
    empty($attrs)?$attrs='':$attrs;
    // dump($why);
    //上面的封装就是下面这种形式
    // $condition['desc']=array(['like','%海南%'],['like','%时光里%'],'and');
    // $data['title|desc']=array('like','%新中%');
    // $come['title|desc']=array('like','%海南%');
    // $data['desc|desc']=array('like','%海南%');
    return $cate->$leixin()->where("cateid IN($cateid)")->where($condition)->paginate($num,false,['query'=>$attrs]);
 }
 //封装所以杂项的数据
 public function getPeizhi($prefix='',$biao,$num){
    $qian=$prefix.$biao.$num;
    $$qian=db($biao)->find($num);
    $this->assign([
      "$qian"=>$$qian,
    ]);
 }
  //封装提交数据的表单
   public function getform($data,$dizhi){
        $tpform=db('form')->insert($data);

        if($tpform!==false){
         $this->success("报名成功,请等候电话联系!",url("$dizhi"),'',0.5);
        }else{
          $this->success("报名成功,请等候电话联系!",url("$dizhi"),'',0.5);
        }
   }

   public function getfenmianRes($cateid){
      $cate=new \app\admin\model\cate();
      $fenmian='getfenmianRes'.$cateid;
      $getfenmianRes=$fenmian;
      $$getfenmianRes=$cate->where('id',$cateid)->find();
      $this->assign("$getfenmianRes",$$getfenmianRes);
   }

}

?>