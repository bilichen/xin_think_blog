<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=emulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title></title>
    <style>
        html body .container{
            width: 100%;
            height: 100%;
        }
        .left{
            float:left;
            width: 20%;
            height: 100%;
        }
        .right{
            float:left;
            width: 80%;
            height: 600px;
        }
        li{
            list-style-type:none;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="<?php echo U('Admin/Index/lgout');?>">退出</a>
    <div class="left">
        <dl>
            <dt>博文管理
                <dd><a href="<?php echo U(GROUP_NAME . '/Blog/index');?>" target="to">博文列表</a></dd>
                <dd><a href="<?php echo U(GROUP_NAME . '/Blog/addBlog');?>" target="to">添加博文</a></dd>
                <dd><a href="<?php echo U(GROUP_NAME . '/Blog/recovery');?>" target="to">回收站</a></dd>
            </dt>

            <dt>属性管理
                <dd><a href="<?php echo U(GROUP_NAME . '/Attribute/index');?>" target="to">属性列表</a></dd>
                <dd><a href="<?php echo U(GROUP_NAME . '/Attribute/addAttr');?>" target="to">添加属性</a></dd>
            </dt>
            <dt>分类管理
                <dd><a href="<?php echo U(GROUP_NAME . '/CateGory/index');?>" target="to">分类列表</a></dd>
                <dd><a href="<?php echo U(GROUP_NAME . '/CateGory/addTopCate');?>" target="to">添加分类</a></dd>
            </dt>
            <dt>系统设置
                <dd><a href="<?php echo U(GROUP_NAME . '/System/index');?>" target="to">验证码设置</a></dd>
            </dt>

        </dl>
    </div>

    <div class="right">
        <iframe src="<?php echo U('Admin/Index/show','','');?>" frameborder="0" name="to" style="width:100%;height:100%;"></iframe>
    </div>
</div>
</body>
</html>