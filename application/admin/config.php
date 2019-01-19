<?php

return [
   'template'               => [
        'view_suffix'  => 'htm',
     
    ],

   'view_replace_str'  =>  [
   '__ADMIN__'=>SITE_URL."/static/admin",
   '__PUBLIC__'=>SITE_URL."/",
  '__ROOT__' => '/',
  '__IMG__'=>SITE_URL,
    ],

    //分页配置，在这里不生效，最终放到公用的config里面
    'paginate'=>[
    	'type'=>'bootstrap',
    	'var_page'=>'page',
    	'list_rows'=>15,
    ],


];   

?>