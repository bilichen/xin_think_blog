<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/daohang.css" />
    <Js src="__PUBLIC__/Js/jquery-1.7.2.min.js"></Js>
    <script>
        function showBefore(){
//            alert('1111111111');
//            $("#name").removeClass("after").addClass("before").val("");
            $("#search").hide();
        }
        function showAfter(){
//            alert('2222222222');
//            $("#name").removeClass("before").addClass("after");
            $("#search").show();
        }
    </script>
</head>
<body>
<div>
<?php
 import('Class.CateGory',APP_PATH); $cate = M('cate')->order('sort')->select(); $cate = CateGory::unlimitedForLayer($cate); ?>

<div class="header">
    <!--header头部-->
    <div class="top">
        <div class="top_1">
            <div class="top_left">后盾网&nbsp&nbsp&nbsp&nbsp后盾网论坛&nbsp&nbsp&nbsp&nbsp后盾网学习社区</div>
            <div class="top_right">ThinkPHP框架&nbsp&nbsp&nbsp&nbsp免费视频教程</div>
        </div>
    </div>
    <!--header头部-->
    <div style="clear: both"></div>
    <!--logo栏-->
    <div class="top2">
        <div class="top_2">
            <div class="top_left">
                <img src="../Public/Images/login_logo.png">
            </div>
            <div class="box">
                <span class="search-icon"></span>
                <input class="search-input" id="name" type="search" name="q" placeholder="Search" autocomplete="off" onFocus="showAfter()"  onblur="showBefore()"/>
                <button type="submit" class="btn" id="search">GO</button>
            </div>
        </div>
    </div>
    <!--logo栏-->
    <div style="clear: both"></div>
    <!--导航条-->
    <div class="htmleaf-container">
        <div class="animenu">
            <button class="animenu__toggle">
                <span class="animenu__toggle__bar"></span>
                <span class="animenu__toggle__bar"></span>
                <span class="animenu__toggle__bar"></span>
            </button>
            <ul class="animenu__nav">
                <li>
                    <a href="__GROUP__">博客首页</a>
                </li>


                <?php
 $_nav_cate = M('cate')->order("sort")->select(); import('Class.CateGory',APP_PATH); $_nav_cate = CateGory::unlimitedForLayer($_nav_cate); foreach($_nav_cate as $_nav_cate_v): extract($_nav_cate_v); $url = U('/c_' . $id); ?>//自定义标签，返回html格式代码
                    <li>
                        <a href="<?php echo ($url); ?>"><?php echo ($name); ?></a>
                        <?php if($child): ?><ul class="animenu__nav__child">
                                <?php if(is_array($child)): foreach($child as $key=>$value): ?><li><a href="<?php echo U('/c_'.$value['id']);?>"><?php echo ($value["name"]); ?></a></li><?php endforeach; endif; ?>
                            </ul><?php endif; ?>
                    </li><?php endforeach;?>

            </ul>
        </div>
    </div>
    <!--导航条-->
</div>

    <!--正文-->
    <div class="content">
        <!--左正文-->
        <div class="content_left">
            <div class="content_left_top">
                <strong>天龙博文</strong>
            </div>



            <?php if(is_array($cate1)): foreach($cate1 as $key=>$v): ?><div class="content_left_content">
                    <div class="content_left_content_top">
                       <div class="content_left_content_top_left">
                         <strong><?php echo ($v["name"]); ?></strong>
                       </div>
                        <div class="content_left_content_top_right">
                          <a href="<?php echo U('/c_'.$v['id']);?>">更多>></a>
                        </div>
                    </div>
                    <hr/>

                    <div class="content_left_content_content">
                        <ul>
                            <?php if(is_array($v["blog"])): foreach($v["blog"] as $key=>$value): ?><li>
                                    <div class="content_left_content_content_left">
                                    >
                                    <a href="<?php echo U('/'.$value['id']);?>"><?php echo ($value["title"]); ?></a>
                                    </div>
                                    <div class="content_left_content_content_right"><?php echo (date('y/m/d',$value["time"])); ?></div>
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div><?php endforeach; endif; ?>
        </div>
        <!--左正文-->

        <!--右正文-->
        <!--右正文-->
<div class="content_right">
    <div class="content_right_box">
        <div class="content_right_top">
            <strong>热门博文</strong>
        </div>
        <?php echo W('Hot',array('limit' => 5));?>

    </div>

    <div class="content_right_box">
        <div class="content_right_top">
            <strong>最新发布</strong>
        </div>
        <?php echo W('New',array('limit' => 5));?>
    </div>

    <div class="content_right_box">
        <div class="content_right_top">
            <strong>友情连接</strong>
        </div>
        <div class="content_right_content">
            <ul>
                <li>
                    <a href="">天龙网</a>
                </li>
                <li>
                    <a href="">天龙网论坛</a>
                </li>
                <li>
                    <a href="">天龙网学习社区</a>
                </li>


            </ul>
        </div>
    </div>
</div>
<!--右正文-->
        <!--右正文-->
    </div>

    <!--底部-->
        <div class="bottom">
    <div class="bottom_1">
        <img src="../Public/Images/login_logo.png">
    </div>
</div>
    <!--底部-->
</div>
</body>
</html>