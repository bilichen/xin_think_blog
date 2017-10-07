<?php

class SystemAction extends CommonAction{

    public function index(){
        $this->display();
    }

    public function updataCode(){
        if(F('code_config',$_POST,CONF_PATH)){
            $this->success('修改成功',U('index'));
        }
    }
}
