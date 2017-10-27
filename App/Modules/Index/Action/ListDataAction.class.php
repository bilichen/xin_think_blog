<?php
/*前台控制器
 * */
class ListDataAction extends Action{

    public function index(){
        $id = $_GET['id'];

        import('ORG.Util.Page');// 导入分页类



        import('Class.CateGory',APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $cids = CateGory::getChildsId($cate,$id);
        $cids[] = $id;
        $count = M('blog')->where(array('cid' => array('in',$cids)))->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,1);// 实例化分页类 传入总记录数-和-每页要显示的记录数
        $show = $Page->show();// 分页显示输出

        $this->blog = D('BlogView')->where(array('cid'=>array('in',$cids)))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }
}
