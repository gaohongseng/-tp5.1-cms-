<?php
namespace app\admin\model;
use think\Model;
use think\Cookie;
class Arttupian extends Model
{
	public function arttusrc(){
		return $this->hasMany('arttusrc','imgid');
	}


















 	public function upload(){
//地址   F:/phpstu/PHPTutorial/WWW/tp5cms4/public 等价于  $_SERVER['DOCUMENT_ROOT']
   // 模板后缀
    // THINK_PATH 框架系统目录 
// ROOT_PATH 框架应用根目录
// APP_PATH 应用目录（默认为application）
// CONF_PATH 配置目录（默认为APP_PATH）
// LIB_PATH 系统类库目录（默认为 THINK_PATH.'library/'）
// CORE_PATH 系统核心类库目录 （默认为 LIB_PATH.'think/'）
// TRAIT_PATH 系统trait目录（默认为 LIB_PATH.'traits/'）
// EXTEND_PATH 扩展类库目录（默认为 ROOT_PATH . 'extend/')
// VENDOR_PATH 第三方类库目录（默认为 ROOT_PATH . 'vendor/'）
// RUNTIME_PATH 应用运行时目录（默认为 ROOT_PATH.'runtime/'）
// LOG_PATH 应用日志目录 （默认为 RUNTIME_PATH.'log/'）
// CACHE_PATH 项目模板缓存目录（默认为 RUNTIME_PATH.'cache/'）
// TEMP_PATH 应用缓存目录（默认为 RUNTIME_PATH.'temp/'）
// 


 	}


 	

}