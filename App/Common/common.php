<?php

function p($array){
    dump($array,1,'<pre>',0);
}

function getBlog2id($id){

    $where = array('cid' => $id);
    $blog = M('blog')->where($where)->select();
//    if($blog){
//        echo 11;
//    }else{
//        echo 22;
//    }
//    p($blog);
//    die;
    return $blog;
}