<?php

function p($array){
    dump($array,1,'<pre>',0);
}

function getBlog2id($id){
//    $map['id&pid'] =array($id,$id,'_multi'=>true);
    $map['id|pid'] = $id;
    $cateid = M('cate')->where($map)->getField('id',true);

//    $arrayid = array(1,12);
//    p($cateid);
//    die;
    $where['cid']=array("in",$cateid);
//    $where = array('cid' => $arrayid);
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