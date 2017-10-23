<?php

class CateGory{

    //把所有的数据，压成分组数组
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
    //组合多维数组
    static public function unlimitedForLayer($cate,$name='child',$pid=0){
        $arr = array();
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $v[$name] = self::unlimitedForLayer($cate,$name,$v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }


    //获取当前数据的所有子数据
    static public function getChild($cate,$pid){
        $arr = array();
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $arr[] = $v;
                $arr = array_merge($arr,self::getChild($cate,$v['id']));
            }
        }
        return $arr;
    }
    //获取当前数据的所有子id
    static public function getChildsId($cate,$pid){
        $arr = array();
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $arr[] = $v['id'];
                $arr = array_merge($arr,self::getChildsId($cate,$v['id']));
            }
        }
        return $arr;
    }
}