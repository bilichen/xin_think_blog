<?php

class BlogAction extends CommonAction{

    public function index(){
        p(phpinfo());

}

    public function addBlog(){
        import('Class.CateGory',APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $this->cate = CateGory::subtree($cate);
        $this->attr = M('attr')->select();

        $this->display();
    }
    public function addBlogHandle(){
        $this->display();
    }
    //编辑图片上传处理
    public function upload(){
        echo 111;
        die;

    }

}