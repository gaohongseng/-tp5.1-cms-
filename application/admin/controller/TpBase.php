<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\admin\controller\Auth as Auth;

class TpBase extends Controller
{
	public function _initialize(){
		
	
		if(!session('name')||!session('id')){
			return $this->error('您尚未登录系统!',url('tplogin/login'),'',0.5);
		}
		$auth=new Auth();
		$request=Request::instance();

		$con=$request->controller();
		$lowercon=strtolower($con);
		$action=$request->action();
		$name=$con.'/'.$action;
		
		$notCheck=array('tpindex/index','tpcate/lists','tpcate/add','tpcate/edit','tpadmin/logout');


		$name=lcfirst($name);
		if(session('id')!=1){
			
			if(!in_array($name,$notCheck)){
				if(!$auth->check($name,session('id'))){
					$this->error('没有权限',url('tpindex/index'),'',0.5);
					
				}
			}
		}

		$this->getarttupian();
		$this->getarticle();
		$this->assign([
			'lowercon'=>$lowercon,
		]);
	}

	//得到所有的图片集
	public function getarttupian(){
		$getarttupian=db('cate')->where("type",3)->field('catename,id')->select();
		
		$this->assign('getarttupian',$getarttupian);
	}

	//得到所有的文章
	public function getarticle(){
		$getarticle=db('cate')->where("type",1)->field('catename,id')->order('sort asc')->select();
		
		$this->assign('getarticle',$getarticle);
	}























    //--------------------------------------------控制器
    public function getselRes($biao,$pai){
        return db($biao)->order($pai)->select();
    }
     public function getselwhereRes($biao,$pai,$where){
        return db($biao)->order($pai)->where($where)->select();
    }
    //封装排序的函数
    public function sortRes($post,$biao,$ziduan,$xinxi,$dizhi){
        if(request()->isPost()){
            foreach($post as $key =>$val){

                db($biao)->update(array("id"=>$key,$ziduan=>$val));
            }
        $this->success($xinxi.'成功',url($dizhi),'',0.5);
            // $this->success('更新排序成功!',url('tpcate/lists'),'',0.5);
        }
     }
	//封装添加的方法
	public function add_data($data,$biao,$dizhi,$xinxi){
        if(request()->isPost()){
  
            // $validate = \think\Loader::validate('link');
            // if(!$validate->scene('add')->check($data)){
            //     $this->error($validate->getError()); die;
            // }
 		$add=db($biao)->insert($data);
            if($add){
    $this->success($xinxi.'成功!',url($dizhi),'',0.5);
            }else{
     $this->error($xinxi.'失败!',url($dizhi),'',0.5);
            }
        }
	}

	//模型添加数据的方法
	public function add_model($data,$biao,$dizhi,$xinxi){
        if(request()->isPost()){
  
            // $validate = \think\Loader::validate('link');
            // if(!$validate->scene('add')->check($data)){
            //     $this->error($validate->getError()); die;
            // }
        $validate=validate('models');
        if(!$validate->scene('add')->check($data)){
            $this->error($validate->getError());die;
        }
 		$add=db($biao)->insert($data);
            if($add){
            	$tableName=$data['table_name'];
            	$tableName=config('database.prefix').$tableName;
//myisam默认   强调性能，不支持外键
// innodb支持事物处理等高级处理，执行大量的select和update，innode比较好
// mysql这里可以设置长度，其他的可能会报错
            	$sql="create table {$tableName} (id int(10) unsigned not null auto_increment primary key) engine=MYISAM default charset=utf8";
            	$zhujian="alter table {$tableName} add aid int(20) unsigned not null";
            	db::execute($sql);
            	db::execute($zhujian);
    $this->success($xinxi.'成功!',url($dizhi),'',0.5);
            }else{
     $this->error($xinxi.'失败!',url($dizhi),'',0.5);
            }
        }
	}

	//封装显示列表的方法
	public function lists_model($biao,$where,$num){
		return db($biao)->order($where)->paginate($num);
	}
	//封装修改模型的方法
	public function edit_model($data,$biao,$id,$ziduanRes,$ziduan,$xinxi,$dizhi){
		$save=db($biao)->where('id',$id)->update($data);
		if($ziduanRes!=$data[$ziduan]){
			$prefix=config('database.prefix');
			$oldtabName=$prefix.$ziduanRes;
			$newtabName=$prefix.$data[$ziduan];
			$sql="rename table {$oldtabName} to {$newtabName}";
			$res=db::execute($sql);
		}
			if($save!==false){
		  		$this->success($xinxi.'成功!',url($dizhi),'',0.5);
            }else{
    			 $this->error($xinxi.'失败!',url($dizhi),'',0.5);
			}
		
	}
	//封装获取当前模型的字段
	public function getziduan($biao,$id,$ziduan){
		$res=db($biao)->where('id',$id)->value($ziduan);
		// if(!$res){
		// 	$this->error('提交信息不完整!','','',0.5);
		// }
		return $res?$res:0;
	}
	// public function getzhiRes($biao,$id){
	// 	return db($biao)->where('id',$id)->value($ziduan);
	// }
	//封装获取当前模型所有值
	public function getfindAll($biao,$id){
		return db($biao)->find($id);
	}
    //封装通过id跳转的方法,用于防止反复提交
    public function add_getid($getid,$xinxi,$dizhi,$attr=''){
            // $validate = \think\Loader::validate('link');
            // if(!$validate->scene('add')->check($data)){
            //     $this->error($validate->getError()); die;
            // }
            
            if($getid){
    $this->success($xinxi.'成功!',url($dizhi,array($attr)),'',0.5);
            }else{
     $this->error($xinxi.'失败!',url($dizhi,array($attr)),'',0.5);
            }
    
    }
	
//---------------------------------------------ajax
	//封装ajax改变状态的函数
	 public function changestat($biao,$id,$ziduan){
        if(request()->isAjax()){
            $rec_index=db($biao)->where('id',$id)->value($ziduan);
            if($rec_index==1){
                db($biao)->where('id',$id)->update([$ziduan=>0]);
                
            }else{
                db($biao)->where('id',$id)->update([$ziduan=>1]);

            }
            return $rec_index;
        }else{
            $this->error('非法操作','','',0.5);
        }
    }

//------------------------------------------文件处理
    //封装缩略图的上传地址,栏目页处理,默认不填目录为主目录，填则为自己创建目录。
    public function add_files($thumb,$mulu,$zu='',$jiami='date'){
    	if($_FILES[$thumb]['tmp_name']){
                $file=request()->file($thumb);
                //这里没有错，本身是要有个public目录
                $info=$file->rule($jiami)->move(ROOT_PATH.'public'.$mulu);
                empty($zu)?$zu=$mulu:$zu;
                return $zu.$info->getSaveName();
        }

    }
//------------------------------------------模型
    //封装栏目页的添加函数      （模型）
    public function add_cateModel($data,$cate,$dizhi,$xinxi){
 			$add=$cate->save($data);
            if($add!==false){
    $this->success($xinxi.'成功!',url($dizhi),'',0.5);
            }else{
     $this->error($xinxi.'失败!',url($dizhi),'',0.5);
            }
    }
    
    //封装添加和修改带字段类型的函数   （
     public function add_fieldModel($data,$cate,$dizhi,$xinxi,$leixin,$ziduan,$tableName,$caozuo,$tihuan,$where='',$oldziduan=''){

     		$validate=validate('field');
                if(!$validate->scene('add')->check($data)){
                 $this->error($validate->getError());die;
            }
     		$where==''?'':$where;
         
     		$oldziduan==''?'':$oldziduan;
          
     		$data[$tihuan]=str_replace('，',',',$data[$tihuan]);
          
     		//过滤字段，防止出错
 			$add=$cate->allowField(true)->save($data,$where);
 		
 			if($add){
//字段类型:1单行文本,2多行文本,3单选按钮,4复选框,5下拉菜单,6附件,7浮点,8模型,9长文本类型
 				switch($data[$leixin]){
 					case 1:
 					case 3:
 					case 4:
 					case 5:
 					case 6:
 					$fileType='varchar(150) not null default""';break;
 					case 2:$fileType='varchar(600) not null default""';break;
 					case 7:$fileType='float not null default "0.0"';break; //长度0
 					case 8:$fileType='int not null default "0"';break;    //长度11位
 					case 9:$fileType='longtext';break;	//长度0
 				}
 			
 				$sql="alter table {$tableName} {$caozuo} {$oldziduan} {$data[$ziduan]} {$fileType}";
 	
 				$res=db::execute($sql);
 			
 			}

            if($add!==false){
   	 $this->success($xinxi.'成功!',url($dizhi),'',0.5);
            }else{
     $this->error($xinxi.'失败!',url($dizhi),'',0.5);
            }
    }

     



}