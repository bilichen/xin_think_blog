<?php
/*前台控制器
 * */
class IndexAction extends Action{

    public function index(){
        if(!$topCate = S('index_list')){//如果缓存不存在，就运行下面代码读取数据，如果缓存存在，则不读取，直接输出数据
                import('Class.CateGory',APP_PATH);
                $topCate = M('cate')->order('sort')->where(array('pid' =>0))->select();
                $_cate_all = M('cate')->order('sort')->select();
                $db = M('blog');
                $field = array('id','title','time');
                foreach($topCate as $k => $v){
                    $cids = CateGory::getChildsId($_cate_all,$v['id']);
                    $cids[] = $v['id'];
                    $topCate[$k]['blog'] = $db->field($field)->where(array('cid' => array('in',$cids)))->select();
                }
                S('index_list',$topCate,10);//定义缓存，参数（名称，数据，有效时间）
        }
        $this->cate1 = $topCate;
//        p($topCate);
//        die;
        $this->display();

        //old2方法
//        $where = array('pid' => 0);
//        $this->cate1 = M('cate')->order('sort')->where($where)->select();
//        $this->display();
    }

    public function listData(){
        $id = $_GET['id'];
        import('Class.CateGory',APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $cids = CateGory::getChildsId($cate,$id);
        $cids[] = $id;

        $this->blog = D('BlogView')->where(array('cid'=>array('in',$cids)))->select();

//        p($blog);
//        die;
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
        $id = $_GET['id'];

        $this->blog = D('BlogShow')->where(array('id'=>$id))->select();

//        p($blog);
//        die;
        $this->display();
    }

}
