<?php

class BlogAction extends CommonAction{

    public function index(){
        $this->blog = D('BlogRelation')->get_blogs();
//        p($blog);
//        die;
//        $field = array('del');//不需要显示的字段
//        $where = array('del' =>0);//查询条件，只查del=0的
//        //field 要显示的字段，如果是true则表示不显示当前数据的字段，false则显示
//       $this->blog = D('BlogRelation')->field($field,true)->where($where)->relation(true)->select();
//        p($b);
//        die;
        $this->display();

}
    //回收站
    public function recovery(){
        $this->blog = D('BlogRelation')->get_blogs(1);
        $this->display('index');
    }
    //删除/还原博文到回收站
    public function delOrRestore(){
        $data = array(
            'id' => I('id',0,intval),
            'del' =>I('num',0,intval),
        );
        if(M('blog')->save($data) !== false){
            if(I('num')==1){
                $this->success('删除到回收站成功',U(GROUP_NAME . '/Blog/index'));
            }else{
                $this->success('还原成功',U(GROUP_NAME . '/Blog/index'));
            }
        }else{
            $this->error('删除失败');
        }
    }
    //彻底删除
    public function delete(){
        if(M('blog')->delete(I('id',0,intval))){
           $where = array(
                'bid' => I('id',0,intval),
           );
            M('blog_attr')->where($where)->delete();
            $this->success('彻底删除成功',U(GROUP_NAME . '/Blog/index'));
        }else{
            $this->error('彻底删除失败');
        }

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