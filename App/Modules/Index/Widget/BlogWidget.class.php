<?php

class BlogWidget extends Widget{

    public function render($data){
//        $limit = $data['limit'];
//        $filed = array('id','title','click');
//        $content = M('blog')->field($filed)->order('click desc')->limit($limit)->select();

       return $this->renderFile();
    }
}
?>
