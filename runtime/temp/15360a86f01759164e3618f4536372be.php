<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\tpcate\test.htm";i:1549684310;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>标题</title>

<!--Basic Scripts-->
<script src="__ADMIN__/style/jquery_002.js"></script>

<script type='text/javascript' src='__ADMIN__/chajian/dantu/jquery.uploadify.min.js'></script>
<!-- 引入uploadfily插件 -->
<link href="__ADMIN__/chajian/dantu/uploadify.css" rel="stylesheet">
   <script type="text/javascript">
        $(function () {
            $("#uploadify").uploadify({
                //指定swf文件
                'swf': '__ADMIN__/chajian/dantu/uploadify.swf',
                //后台处理的页面
                'uploader': 'UploadServlet',
                'progressData' : 'speed',
                //按钮显示的文字
                'buttonText': '上传文件',
                'buttonClass':'btn btn-azure',
                //显示的高度和宽度，默认 height 30；width 120
                //'height': 15,
                //'width': 80,
                //上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
                //在浏览窗口底部的文件类型下拉菜单中显示的文本
                'fileTypeDesc': 'Image Files',
                //允许上传的文件后缀
               
            });
        });

    </script>
</head>
<body>
	



<div>
     <input type="file" name="uploadify" id="uploadFile" />
     <div id="some_file_queue"></div>
     <div  id="fileName"></div>
     <div style="clear: both;margin-top: 20px;cursor: pointer;">
          <a
	         class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary a-btn"
	         onclick="javascript:$('#uploadFile').uploadify('upload','*')">
	         <span class="glyphicon glyphicon-play"></span> <span
	         class="ui-button-text">开始上传</span>
          </a><a
	         class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary a-btn"
	         onclick="javascript:$('#uploadFile').uploadify('cancel','*')">
	         <span class="glyphicon glyphicon-ban-circle"></span> <span
	         class="ui-button-text">取消上传</span>
          </a>
     </div>
</div>




</body>
</html>