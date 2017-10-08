<?php

class CateGory{

    static public function subtree($cate,$html = '&nbsp &nbsp -- &nbsp',$pid=0,$level=0) {
        $arr = array(); // 子孙数组
        foreach($cate as $v) {
            if($v['pid'] == $pid) {
                $v['level'] = $level+1;
                $v['html'] = str_repeat($html,$level);
                $arr[] = $v; //
                $arr = array_merge($arr,self::subtree($cate,$html,$v['id'],$level+1));
            }
        }
        return $arr;
    }
}