<?php

class CateGoryAction extends CommonAction{

    //显示分类
    public function index(){
        import('Class.CateGory',APP_PATH);
        $db = M('cate');
       $cate = $db->order('sort')->select();
        $this->cate = CateGory::subtree($cate);
//        p($cate);
//        die;
        $this->display();
    }

    //添加分类视图
    public function addCate(){
        $this->pid = I('pid' ,0);
        $this->name =  I('name');

        $this->display();
    }

    //添加顶级栏目
    public function addTopCate(){
        $this->pid = I('pid' ,0);
        $this->display();
    }

    //添加分类表单处理(顶级和分类)
    public function addCateHandle(){
        if(M('cate')->add($_POST)){
            $this->success('添加成功',U('index'));
        }else{
            $this->error('添加失败');
        }
    }




    //修改排序表单处理
    public function updataSort(){
        foreach($_POST as  $key => $value){
            M('cate')->where(array('id'=>$key))-> setField('sort',$value);
        }
        $this->redirect(GROUP_NAME . '/CateGory/index');
    }
}
?>
