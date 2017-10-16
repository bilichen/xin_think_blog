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
            'attr' => 'limit,order',
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
        $attr = $this->parseXmlAttr($attr);
//        p($attr);


    }




}
?>
