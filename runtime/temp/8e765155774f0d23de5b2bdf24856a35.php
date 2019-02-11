<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\tpmodel\lists.htm";i:1549341100;s:88:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\commons\header.htm";i:1547774329;s:86:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\commons\left.htm";i:1549506592;}*/ ?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>beyond Admin后台</title>

<meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
<link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
<link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

<!--Beyond styles-->
<link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
<link href="__ADMIN__/style/demo.css" rel="stylesheet">
<link href="__ADMIN__/style/typicons.css" rel="stylesheet">
<link href="__ADMIN__/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->

<!-- 头部 -->
<div class="navbar">
<div class="navbar-inner">
<div class="navbar-container">
<!-- Navbar Barnd -->
<div class="navbar-header pull-left">
<a href="#" class="navbar-brand">
    <small>
            <img src="images/logo.png" alt="">
        </small>
</a>
</div>
<!-- /Navbar Barnd -->
<!-- Sidebar Collapse -->
<div class="sidebar-collapse" id="sidebar-collapse">
<i class="collapse-icon fa fa-bars"></i>
</div>
<!-- /Sidebar Collapse -->
<!-- Account Area and Settings -->
<div class="navbar-header pull-right">
<div class="navbar-account">
    <ul class="account-area">
        <li>
            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                <div class="avatar" title="View your public profile">
                    <img src="images/adam-jansen.jpg">
                </div>
                <section>
                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('name'); ?></span></span></h2>
                </section>
            </a>
            <!--Login Area Dropdown-->
            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                <li class="username"><a>David Stevenson</a></li>
                <li class="dropdown-footer">
                    <a href="<?php echo url('Tpadmin/logout'); ?>">
                            退出登录
                        </a>
                </li>
                <li class="dropdown-footer">
                    <a href="<?php echo url('Tpadmin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                            修改密码
                        </a>
                </li>
            </ul>
            <!--/Login Area Dropdown-->
        </li>
        <!-- /Account Area -->
        <!--Note: notice that setting div must start right after account area list.
            no space must be between these elements-->
        <!-- Settings -->
    </ul>
</div>
</div>
<!-- /Account Area and Settings -->
</div>
</div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
<div class="page-container">
<!-- Page Sidebar -->

<div class="page-sidebar" id="sidebar">
<!-- Page Sidebar Header-->
<div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
</div>
<!-- /Page Sidebar Header -->
<!-- Sidebar Menu -->
<ul class="nav sidebar-menu">
    <!--Dashboard-->

    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text">管理员</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpadmin/lists'); ?>">
                    <span class="menu-text">
                        管理列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>      



         <ul class="submenu">
            <li>
                <a href="<?php echo url('tpauthgroup/lists'); ?>">
                    <span class="menu-text">
                        用户组列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul> 




         <ul class="submenu">
            <li>
                <a href="<?php echo url('tpauthrule/lists'); ?>">
                    <span class="menu-text">
                        权限列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul> 



    </li> 

    <!-- 栏目 -->

 <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text">栏目管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpcate/lists'); ?>">
                    <span class="menu-text">
                            栏目列表                       </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 



<!-- 
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-file-text"></i>
            <span class="menu-text">文章管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"> -->
 <?php if($getarticle): ?>
        <!--     <li>
                <a href="<?php echo url('tparticle/lists',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        所有文章列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li> -->
        <?php endif; if($getarticle): if(is_array($getarticle) || $getarticle instanceof \think\Collection): $i = 0; $__LIST__ = $getarticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<!--  <li>
                <a href="<?php echo url('tparticle/lists',array('cateId'=>$vo['id'])); ?>">
                    <span class="menu-text">
                        <?php echo $vo['catename']; ?>                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
 -->
<?php endforeach; endif; else: echo "" ;endif; endif; ?>

            
  <!--       </ul>                            
    </li>  -->




    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-file-text"></i>
            <span class="menu-text">文档管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tparthives/lists',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        文档列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('tparthives/add',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        添加文档                                   
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
 </ul>                            
    </li> 








    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-chain"></i>
            <span class="menu-text">图片管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
        <?php if($getarttupian): ?>
            <li>
                <a href="<?php echo url('tparttupian/lists',array('typeid'=>3)); ?>">
                    <span class="menu-text">
                        所有图片列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        <?php endif; if($getarttupian): if(is_array($getarttupian) || $getarttupian instanceof \think\Collection): $i = 0; $__LIST__ = $getarttupian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
 <li>
                <a href="<?php echo url('tparttupian/lists',array('cateId'=>$vo['id'])); ?>">
                    <span class="menu-text">
                        <?php echo $vo['catename']; ?>                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

<?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>                            
    </li> 



    


    <li <?php if($lowercon == 'tplink'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-chain"></i>
            <span class="menu-text">友情链接</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tplink/lists'); ?>">
                    <span class="menu-text">
                        链接列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 



    <li <?php if($lowercon == 'tpsearch'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-chain"></i>
            <span class="menu-text">搜索标签</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpsearch/lists'); ?>">
                    <span class="menu-text">
                        搜索列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 
    


    <li <?php if($lowercon == 'tpmodel'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-maxcdn"></i>
            <span class="menu-text">模型管理</span>
            <i class="<menu-exp></menu-exp>and"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpmodel/add'); ?>">
                    <span class="menu-text">
                        添加模型                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
              <li>
                <a href="<?php echo url('tpmodel/lists'); ?>">
                    <span class="menu-text">
                        模型列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 



<li <?php if($lowercon == 'tpnote'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-list-ul"></i>
            <span class="menu-text">字段管理</span>
            <i class="<menu-exp></menu-exp>and"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpfield/add'); ?>">
                    <span class="menu-text">
                        添加字段                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
              <li>
                <a href="<?php echo url('tpfield/lists'); ?>">
                    <span class="menu-text">
                        字段列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


<li <?php if($lowercon == 'tpnote'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-list-ul"></i>
            <span class="menu-text">采集管理</span>
            <i class="<menu-exp></menu-exp>and"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpnote/add'); ?>">
                    <span class="menu-text">
                        添加节点                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
              <li>
                <a href="<?php echo url('tpnote/lists'); ?>">
                    <span class="menu-text">
                        节点列表                                  </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


    <li <?php if($lowercon == 'tpqtarticle'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-h-square"></i>
            <span class="menu-text">其他修改</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpqtarticle/tp3wenzhanlst'); ?>">
                    <span class="menu-text">
                        文章列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


<li <?php if($lowercon == 'tpform'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa   fa-comments"></i>
            <span class="menu-text">表单管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpform/lists'); ?>">
                    <span class="menu-text">
                        留言列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


    <li <?php if($lowercon == 'tpconf'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">系统</span>
            <i class="menu-expand"></i>
        </a>


        <ul class="submenu">
           
            <li>
                <a href="<?php echo url('tpconf/lists'); ?>">
                    <span class="menu-text">
                        配置列表                             
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li> 
            <li>
                <a href="<?php echo url('tpconf/conf'); ?>">
                    <span class="menu-text">
                        配置项                              </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>    
    </li>  

                     
    
</ul>
<!-- /Sidebar Menu -->
</div>


<!-- /Page Sidebar -->
<!-- Page Content -->
<div class="page-content">
<!-- Page Breadcrumb -->
<div class="page-breadcrumbs">
<ul class="breadcrumb">
            <li>
<a href="#">系统</a>
</li>
            <li class="active">模型管理</li>
            </ul>
</div>
<!-- /Page Breadcrumb -->

<!-- Page Body -->
<div class="page-body">

<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url("tpmodel/add"); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">
<div class="widget">
<div class="widget-body">
<div class="flip-scroll">
    <form action="" method='post'>
<table class="table table-bordered table-hover">
<thead class="">
<tr>
	<th class="text-center">模型ID</th>
    <th class="text-center">模型名称</th>
    <th class="text-center">附加表名</th>
    <th class="text-center">启用状态</th>
    <th class="text-center" width='20%'>操作</th>
</tr>
</thead>
<tbody>
   
<?php if(is_array($modelRes) || $modelRes instanceof \think\Collection): $i = 0; $__LIST__ = $modelRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$model): $mod = ($i % 2 );++$i;?>  
<!-- 这里的id用作状态   -->                    
    <tr id=<?php echo $model['id']; ?>>
    	<td align="center"><?php echo $model['id']; ?></td>
        <td align="center"><?php echo $model['model_name']; ?></td>
        <td align="center"><?php echo $prefix; ?><?php echo $model['table_name']; ?></td>
         <td align="center"><?php if($model['status']): ?><a class="btn btn-success btnstatus">启用</a><?php else: ?><a class="btn btn-danger btnstatus">禁用</a><?php endif; ?></td>
        <td align="center">
            <a href="<?php echo url('tpmodel/edit',array('modelid'=>$model['id'])); ?>" class="btn btn-primary btn-sm shiny">
                <i class="fa fa-edit"></i> 编辑
            </a>
            <!-- 这里的属性用作删除模型 -->
            <a href="#" onClick="ajaxdel(this);" class="btn btn-danger btn-sm shiny" id="<?php echo $model['id']; ?>" table_name="<?php echo $prefix; ?><?php echo $model['table_name']; ?>">
                <i class="fa fa-trash-o"></i> 删除
            </a>
        </td>
    </tr>
   <?php endforeach; endif; else: echo "" ;endif; ?>                  
    </tbody>
</table>




</form>

</div>
<div>

<div class="div" style='margin-top:20px;'>

</div>
      
        </div>
</div>
</div>
</div>
</div>
</div>
<!-- /Page Body -->
</div>
<!-- /Page Content -->
</div>  
</div>

<!--Basic Scripts-->
<script src="__ADMIN__/style/jquery_002.js"></script>
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>







<link rel='stylesheet' href="__ADMIN__/layui/css/layui.css">
<script src="__ADMIN__/layui/layui.js"></script>
<script>
$(function(){
	$(".btnstatus").bind('click',function(){
		var $the=$(this).index();
		var id=$(this).parents('tr').attr('id');

		$.ajax({
			type:'get',
			dataType:'json',
			async:false,
			url:'/admin/tpmodel/changestatus/modelid/'+id,
			success:function(data){
var $that=$("tr[id="+id+"]").find('.btnstatus');
				if(data==1){
					$that.text('禁用');
					$that.removeClass('btn-success').addClass('btn-danger');
					
				}else if(data==0){
					$that.text('启用');
				$that.removeClass('btn-danger').addClass('btn-success');
				
				}
			}
		})
	})

})


layui.use(['layer', 'form'], function(){
  var layer = layui.layer,form = layui.form;


  // layer.confirm('确定要删除该模型吗?');
  // layer.msg('确定要删除该模型吗?');
});

//ajax删除模型
	function ajaxdel(o){
		// alert('您好啊');

		layer.confirm('确定要删除该模型吗?', {icon: 3, title:'提示'}, function(index){
		var id=$(o).attr('id');
		var table_name=$(o).attr('table_name');
		$.ajax({
			type:'get',
			dataType:'json',
			async:false,
			url:"/admin/tpmodel/ajaxdel/table_name/"+table_name+"/id/"+id,
			success:function(data){  

				if(data==1){

					layer.msg('删除模型成功!',{icon:1});
					$(o).parents('tr').hide();
				}else{
					layer.msg('删除模型失败!',{icon:1});
				}
			}
		})
	layer.close(index);
});
		
	








	}
</script>


</body></html>