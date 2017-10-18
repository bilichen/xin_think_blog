<?php

    define('APP_NAME','App');
    define('APP_PATH','./App/');
    define('APP_DEBUG',true);
    require './ThinkPHP/ThinkPHP.php';


    /*app说明
     * 一、运用thinkphp单入口新分组功能，分成后台admin和前台index
     * 二、url重定，省略index.php
     * 三、url路由设置，简化路径
     * 四、thinkphp 自定义标签，封装功能到标签上，在html上简化代码
     * 五、使用U方法时，在（参数前加/表示在当前路径，而不会指向默认的路径控制器）
     * 六、使用自定的的CateGory函数，把array数据，转换成相应的组合array，方便使用无限级分类
     * 七、使用PHP函数extract，把变量名转换成变量值
     * 八、使用thinkphp自带Widget类，代替自定义标签
     *
     *
     *
     *
     *
     *  */

?>