<?php
    return array(
        //分组
        'APP_GROUP_LIST' => 'Index,Admin',
        'DEFAULT_GROUP' => 'Index',

        //新分组模式
        'APP_GROUP_MODE' => 1,//旧模式为0
        'APP_GROUP_PATH' => 'Modules',//可以自定义保存文件名

        //数据库参数
        'DB_HOST'=>'localhost',
        'DB_PORT'=>'3307',
        'DB_USER' =>'root',
        'DB_PWD' =>'',
        'DB_NAME' =>'blog',
        'DB_PREFIX' =>'hd_',

        //调试模式
//        'SHOW_PAGE_TRACE' => true,

        //点语法默认解析
        'TMPL_VAR_IDENTIFY' => 'array',

        //模板路径
        'TMPL_FILE_DEPR' => '_',

        //自定义session保存类形，默认是文件形式，现改为数据库
//    'SESSION_TYPE' => 'Db',

       'LOAD_EXT_CONFIG' =>'code_config',

        //开启路由配置
        'URL_MODEL' => 2,
        'URL_ROUTER_ON' =>true,
        'URL_ROUTE_RULES' => array(
            ':id\d' => 'Index/Show/index',//直接c
//            's/:id\d' => 'Index/Index/show',//s后面加数字\d正则，只适配数字
            '/^c_(\d+)$/' => 'Index/ListData/index?id=:1'//正则字母+数字  (c_11112)
//            '/Index/^c_(\d+)$/' => 'Index/Index/Index/listData?id=:1',//正则字母+数字  (c_11112)
        ),

    );

?>