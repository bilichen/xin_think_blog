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
        $this->display();
    }

    public function listData(){
        $this->display();

    }

    public function show(){

        $this->display();

    }


}
