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

//封装百度编辑器函数
      function getueditor($name,$value='',$width=1000,$height=400){
        $str=<<<HTML
        <textarea name='$name' id='$name'>$value</textarea>
        <script type="text/javascript">
UE.getEditor('$name',{toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl'
            // , 'indent', '|',
            // 'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            // 'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            // 'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment'
            // , 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
            // 'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
            // 'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
            // 'print', 'preview', 'searchreplace', 'drafts', 'help'
        ]],unitialFrameWidth:1000,initialFrameHeight:400,})
        </script>
HTML;
        return $str;
     }
//封装自定义字段显示函数
     function getnoueditor($file){
        
                switch($file['field_type']){
                        case 1:
                        case 7:
                        case 8:
                        $str="<input type='text' name='$file[field_ename]' class='form-control'>";echo $str;break;
                        case 2:$str="<textarea class='form-control' name='$file[field_ename]' rows='6'></textarea>";echo $str;break;
                        case 3:if($file['field_values']){
                            $arr=explode(',',$file['field_values']);
                            foreach($arr as $k1=>$v1){
                                $str="<label style='margin-top:5px;'>";
$str.="<input type='radio' name='$file[field_ename]' value='$v1'>";
$str.="<span class='text'>".$v1."&nbsp;&nbsp;</span>";
                                $str.="</label>";
                                 echo $str; 
                            }
                           
                        };break;
                         case 4:if($file['field_values']){
                            $arr=explode(',',$file['field_values']);

                            foreach($arr as $k1=>$v1){
                                
                                $str="<label style='margin-top:5px;'>";
$str.="<input type='checkbox' name='$file[field_ename][]' value='$v1'>";
$str.="<span class='text'>".$v1."&nbsp;&nbsp;</span>";
                                $str.="</label>";
                                echo $str;
                            }
                        };break;
                        case 5:if($file['field_values']){
                            $arr=explode(',',$file['field_values']);
                            $str="<select name=".$file['field_ename'].">";
                            foreach($arr as $k1=>$v1){
                                $str.="<option value=$v1>".$v1."</option>";
                            }
                            $str.="</select>";
                            echo $str;
                        };break;
                    default:$str='默认情况';break;
                      }
           
     }

















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