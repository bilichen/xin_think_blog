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
//        p($blog);
//        die;
        $this->display();
    }

    public function listData(){
//        p($_GET['id']);
//        die;
        $where = array('cid'=>$_GET['id']);
        $where1 = array('id'=>$_GET['id']);
        $dataList = M('blog')->where($where)->select();
        $cateName = M('cate')->where($where1)->getField('name',true);
        $arr = array();
        foreach($dataList as $v){
            $v['name'] = $cateName[0];
            $arr[] = $v;
        }
        $this->dataList = $arr;
//        p($arr);
//       die;
        $this->display();

    }

    public function show(){
        $this->display();
    }

}
