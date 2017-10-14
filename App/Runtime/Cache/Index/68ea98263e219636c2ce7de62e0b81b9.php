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
</body>
</html>