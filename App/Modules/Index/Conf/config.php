<?php

return array(

    'TMPL_PARSE_STRING'=>array(
        '__PUBLIC__' => __ROOT__.'/'. APP_NAME.'/Modules/Index/Tpl/Public',
        '__STATIC__' => __ROOT__.'/'. APP_NAME.'/Modules/Index/Tpl/Static',
    ),

//    'URL_HTML_SUFFIX' =>'',//去除伪后缀名

    'TMPL_EXCEPTION_FILE' => './Public/Tpl/error.html',
    'APP_AUTOLOAD_PATH' => '@.TagLib',
    'TAGLIB_BUILD_IN' => 'Cx,Blog',

    //开启静态缓存
    'HTML_CACHE_ON' => true,
    'HTML_CACHE_RULES' => array(
        //控制器名+方法名       此缓存名称，有效时间
        'Show:index' =>array('{:module}_{:action}_{id}',10),
    ),


);
