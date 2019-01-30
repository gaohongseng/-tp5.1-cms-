<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function getUrlzhong($params) { 

	foreach ($_GET as $k=>$v){

	    if(!is_array($v)){

	        if (!mb_check_encoding($v, 'utf-8')){
	            $_GET[$k] = iconv('gbk', 'utf-8', $v);
	        }

	    }else{
	        foreach ($_GET['_URL_'] as $key=>$value){
	        	dump($_GET['_URL_']);
	            if (!mb_check_encoding($value, 'utf-8')){
	                $_GET['_URL_'][$key] = iconv('gbk', 'utf-8', $value);
	            }
	        }

	    }
	}
	return $params;

}






/** 
* GOOGLE翻译 汉英 
*/
function googleTran($text){ 
if(empty($text)) return ""; 
sleep(1);//反间碟 
$wf=file_get_contents('http://translate.google.cn/translate_t?sl=zh-CN&tl=en&text='.urlencode($text).'#'); 
if (false===$wf||empty($wf)){ 
return false; 
} 
//echo $wf;
   
//截取相关信息 
$return = ""; 
$wf=mb_substr($wf,14000,28100,'utf-8');
   
$wf=strip_tags($wf); 
//print_r ($wf);
$star=strpos($wf,"英语中文(简体)日语"); 
   
if(false===$star){ 
return false; 
} 
$end=strpos($wf,"Alpha字典"); 
if(false===$end){ 
return false; 
} 
$return = strip_tags(substr($wf,$star+18,$end-$star-18)); 
   
return $return; 
   
} 
   

?>