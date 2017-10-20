<?php

class NewWidget extends Widget{

    public function render($data){
        $limit = $data['limit'];
        $filed = array('id','title','click');
        $data['blog'] = M('blog')->field($filed)->order('time desc')->limit($limit)->select();

       return $this->renderFile('',$data);
    }
}
?>
