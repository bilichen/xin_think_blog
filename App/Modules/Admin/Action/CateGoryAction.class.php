<?php

class CateGoryAction extends CommonAction{

    //显示分类
    public function index(){
        $db = M('cate');
        $this->cate = $db->order('sort')->select();
        $this->display();
    }

    //添加分类视图
    public function addCate(){
        $this->display();
    }

    //添加分类表单处理
    public function addCateHandle(){
        if(M('cate')->add($_POST)){
            $this->success('添加成功',U('addCate'));
        }else{
            $this->error('添加失败');
        }
    }

    //修改排序表单处理
    public function updataSort(){
        p($_POST);
    }
}
?>
