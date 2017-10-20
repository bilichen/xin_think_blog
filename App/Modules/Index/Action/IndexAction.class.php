<?php
/*前台控制器
 * */
class IndexAction extends Action{

    public function index(){
//        import('Class.CateGory',APP_PATH);
//        $data =  M('cate')->order('sort')->select();
//        $data = CateGory::unlimitedForLayer($data);
//        p($data);
//        die;
//        $field = array('id','title','time');
        $where = array('pid' => 0);
        $this->cate1 = M('cate')->order('sort')->where($where)->select();
        $this->blog1 = M('blog')->select();
//        p($blog);
//        die;
        $this->display();
    }

    public function listData(){
//        p($_GET['id']);
//        die;
        $this->display();

    }

    public function show(){

        $this->display();

    }


}
