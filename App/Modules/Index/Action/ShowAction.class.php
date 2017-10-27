<?php
/*前台控制器
 * */
class ShowAction extends Action{

    public function index(){
        $id = $_GET['id'];

        M('blog')->where(array('id'=>$id))->setInc('click');
        $blog = D('BlogShow')->find($id);
        import('Class.CateGory',APP_PATH);
        $cate = M('cate')->select();
        $this->parent = CateGory::getParent($cate,$blog['cid']);
        $this->blog = $blog;
//        p($parent);die;

        $this->display();
    }
}
