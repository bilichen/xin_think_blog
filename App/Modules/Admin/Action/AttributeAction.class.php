<?php

class AttributeAction extends CommonAction{

    public function index(){

       $this->attr = M('attr')->select();
        $this->display();
    }

    public function addAttr(){
        $this->display();
    }

    public function addAttrHandle(){
        if(M('attr')->add($_POST)){
            $this->success('添加属性成功',U('index'));
        }else{
            $this->error('添加属性失败');
        }
    }
}
