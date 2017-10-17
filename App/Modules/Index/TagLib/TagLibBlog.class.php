<?php
import('TagLib');

/**
 * Class TagLibBlog
 * 自定义标签库
 */
class TagLibBlog extends TagLib{

    Protected $tags = array(
       //自定类标签名
        'nav' => array(
            //自定义标签的属性
            'attr' => 'order',
            //非闭合标签，０为非闭合<img arc="" />（即没有</p>）
            'close' => 1,
        ),
    );
    /*
     * 自定义标签名前+下划线_,在这个方法里处理数据
     * $attr = 属性，当有多个时是一个数据，要即行转换
     * $content 内容，自定义标签（闭合标签），中所有的内容(控件)
     * */
    public function _nav($attr,$content){
        //thinkphp自带函数，把String类形转换成数组array
        $attr = $this->parseXmlAttr($attr);
        //php定界符，返回html格式代码，相当于在html中直接书写
        $str = <<<str
<?php
    \$_nav_cate = M('cate')->order("{$attr['order']}")->select();
    import('Class.CateGory',APP_PATH);
    \$_nav_cate = CateGory::unlimitedForLayer(\$_nav_cate);
    foreach(\$_nav_cate as \$_nav_cate_v):
        extract(\$_nav_cate_v);
        \$url = U('/c_' . \$id);
?>
str;
        $str .=$content;
        $str .='<?php endforeach;?>';
//        p($str);
//        die;
        return $str;
    }
}
?>
