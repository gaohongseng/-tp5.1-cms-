<?php

return [
   
    'view_replace_str'  =>  [

        '__PUBLIC__'=>SITE_URL.'/static/phone',
         '__IMG__'=>SITE_URL,
         
    ],

       'paginate'               => [
        'type'      => 'page\Page',//分页类
        'var_page'  => 'page',
        'list_rows' => 15,
    ],
];
