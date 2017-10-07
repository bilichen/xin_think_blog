<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证码设置页面</title>
    <link rel="stylesheet" href="../Public/Css/style.css" />
</head>
<body>
    <form action="<?php echo U(GROUP_NAME.'/System/updataCode');?>" method="post">
        <table>
            <tr align="center" >
                <th colspan="2">验证码设置页面</th>
            </tr>
            <tr>
                <td align="right">验证码长度：</td>
                <td>
                    <input type="text" name="CODE_LEN" value="<?php echo (C("CODE_LEN")); ?>">
                </td>
            </tr>
            <tr>
                <td align="right">宽度：</td>
                <td>
                    <input type="text" name="CODE_WIDTH" value="<?php echo (C("CODE_WIDTH")); ?>">
                </td>
            </tr>
            <tr>
                <td align="right">高度：</td>
                <td>
                    <input type="text" name="CODE_HEIGHT" value="<?php echo (C("CODE_HEIGHT")); ?>">
                </td>
            </tr>
            <tr>
                <td align="right">字体大小：</td>
                <td>
                    <input type="text" name="CODE_FONT_SIZE" value="<?php echo (C("CODE_FONT_SIZE")); ?>">
                </td>
            </tr>
            <tr>
                <td align="right">字体颜色：</td>
                <td>
                    <input type="text" name="CODE_FONT_COLOR" value="<?php echo (C("CODE_FONT_COLOR")); ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="保存提交">
                </td>

            </tr>
        </table>
    </form>
</body>
</html>