<?php

class BlogShowModel extends ViewModel{

    protected $viewFields = array(
        'blog' =>array('id','title','time','cid','click','content','_type' => 'LEFT'),
        'cate' =>array('name','_on' =>'blog.cid = cate.id'),
    );
}
