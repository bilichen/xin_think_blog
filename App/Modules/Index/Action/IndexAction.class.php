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
        $topCate = M('cate')->order('sort')->where(array('pid' =>0))->select();
//        p($topCate);
//        die;
        $this->catex = $topCate;

        $this->display();



        //自己想的处理方法，比较烦锁，上面用视频教的方法
//        $_pid = array('pid'=>$_GET['id']);//传进所点击的id,获取cate所有当前id以级子类的pid
//
//        $catePid = M('cate')->where($_pid)->getField('id',true);//能过cate的id,获取该id名
//        if($catePid){//如果没有子级id，反回false
//            array_unshift($catePid,$_GET['id']);//把父级id添加进数组
//        }else{
//            $catePid[0] = $_GET['id'];//没有子级，就只有自己一个父级id
//        }
//          $where['cid'] = array('in',$catePid);
//
//        $dataList = M('blog')->where($where)->select();//获取所点的id相应的blog
//        $where1 = array('id'=>$_GET['id']);//传进所点击的id，对应cate的id
//        $cateName = M('cate')->where($where1)->getField('name',true);//能过cate的id,获取该id名
//        $arr = array();
//        foreach($dataList as $v){
//            $v['name'] = $cateName[0];//把name字段，压进数组，每个数组值都要有一个name
//            $arr[] = $v;
//        }
//        $this->dataList = $arr;
//        $this->display();

    }

    public function show(){
        $this->display();
    }

}
