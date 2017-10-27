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
     * 九、熟练运用php的方法，把相应的数据压到array中，可以直接调用
     * 十、thinkphp缓存的运用
     * 十一、使用视图模型，简化多表查询数据，在thinkPHP中，视图模型只能查，关系模型可以实现增，删，改，查
     *      当要进行多表查询数据时，原生sql就比较复杂，建议使用thinkPHP自带的视图模型或关系模型
     * 十二、Ueditor的使用
     * 十三、thinkphp 静态缓存的使用
     *
     *
     *
     *  */

?>