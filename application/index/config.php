<?php

return [
   
    'view_replace_str'  =>  [

        '__PUBLIC__'=>SITE_URL.'/static/index',
         '__IMG__'=>SITE_URL.'/static',
         '__DEDEIMG__'=>SITE_URL.'/static/admin/images/defaultpic.gif',
         '__BANNER__'=>SITE_URL.'/static/admin/images/banner.jpg',
    ],

    'paginate'               => [
        'type'      => 'page\Page',//分页类
        'var_page'  => 'page',
        'list_rows' => 15,
    ],

];
