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
                        <a href="#">博客首页</a>
                    </li>
                    <li>
                        <a href="#">HTML</a>
                    </li>
                    <li>
                        <a href="#">DIV+CSS</a>
                    </li>
                    <li>
                        <a href="#">JavaScript</a>
                        <ul class="animenu__nav__child">
                            <li><a href="">JQuery</a></li>
                            <li><a href="">AJax</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PHP</a>
                        <ul class="animenu__nav__child">
                            <li><a href="">对象</a></li>
                            <li><a href="">数组</a></li>
                            <li><a href="">字符串</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">MySql</a>
                        <ul class="animenu__nav__child">
                            <li><a href="">存储引擎</a></li>
                            <li><a href="">视图</a></li>
                            <li><a href="">事务</a></li>
                            <li><a href="">存储过程</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Linux</a>
                        <ul class="animenu__nav__child">
                            <li><a href="">基本命令</a></li>
                            <li><a href="">网络配置</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">其它</a>
                    </li>
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

            <div class="content_left_content">
                <div class="content_left_content_top">
                   <div class="content_left_content_top_left">
                     <strong>PHP</strong>
                   </div>
                    <div class="content_left_content_top_right">
                      <a href="##">更多>></a>
                    </div>
                </div>
                <hr/>
                <div class="content_left_content_content">
                    <ul>
                        <li>
                            <div class="content_left_content_content_left">
                            >
                            <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content_left_content">
                <div class="content_left_content_top">
                    <div class="content_left_content_top_left">
                        <strong>PHP</strong>
                    </div>
                    <div class="content_left_content_top_right">
                        <a href="##">更多>></a>
                    </div>
                </div>
                <hr/>
                <div class="content_left_content_content">
                    <ul>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="content_left_content">
                <div class="content_left_content_top">
                    <div class="content_left_content_top_left">
                        <strong>PHP</strong>
                    </div>
                    <div class="content_left_content_top_right">
                        <a href="##">更多>></a>
                    </div>
                </div>
                <hr/>
                <div class="content_left_content_content">
                    <ul>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content_left_content">
                <div class="content_left_content_top">
                    <div class="content_left_content_top_left">
                        <strong>PHP</strong>
                    </div>
                    <div class="content_left_content_top_right">
                        <a href="##">更多>></a>
                    </div>
                </div>
                <hr/>
                <div class="content_left_content_content">
                    <ul>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                        <li>
                            <div class="content_left_content_content_left">
                                >
                                <a href="">对象的产生和生命周期</a>
                            </div>
                            <div class="content_left_content_content_right">06/06</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--左正文-->


        <!--右正文-->
        <div class="content_right">
            <div class="content_right_box">
                <div class="content_right_top">
                    <strong>热门博文</strong>
                </div>
                <div class="content_right_content">
                    <ul>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content_right_box">
                <div class="content_right_top">
                    <strong>最新发布</strong>
                </div>
                <div class="content_right_content">
                    <ul>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                        <li>
                            <a href="">对象的产生和生命周期</a>
                            <label>(1024)</label>
                        </li>
                    </ul>
                </div>
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
    </div>

    <!--底部-->
    <div>

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