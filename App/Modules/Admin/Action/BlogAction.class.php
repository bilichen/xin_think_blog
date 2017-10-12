<?php

class BlogAction extends CommonAction{

    public function index(){
        $this->blog = D('BlogRelation')->get_blogs();
//        p($blog);
//        die;
//        $b = D('BlogRelation')->relation(true)->select();
//        p($b);
//        die;
        $this->display();

}

    public function addBlog(){
        import('Class.CateGory',APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $this->cate = CateGory::subtree($cate);
        $this->attr = M('attr')->select();

        $this->display();
    }
    public function addBlogHandle(){
//        p($_POST);
//        die;
        $data = array(
            'title' => I('title'),
            'cid' => I('cid'),
            'content' => I('content'),
            'time' => time(),
            'del' => 0,
        );
//        if(isset($_POST['aid'])){
//                foreach($_POST['aid'] as $v){
//                    $data['aid'][] = $v;
//                }
//        }
//        p($data);
//        die;
//        D('BlogRelation')->relation(true)->add($data);

        if($re = M('blog')->data($data)->add()){
            //判断是否有attr属性，有则要写入中间表数据
            if(isset($_POST['aid'])){
                foreach($_POST['aid'] as $v){
                    $data1 = array(
                        'bid' => $re,
                        'aid' => $v,
                    );
                   M('blog_attr')->data($data1)->add();
                }
                $this->success('添加博文成功',U('index'));
            }

        }else{
            $this->error('添加博文失败');
        }


    }


}