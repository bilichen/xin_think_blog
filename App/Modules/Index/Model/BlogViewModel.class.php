<?php

class BlogViewModel extends ViewModel{

    protected $viewFields = array(
        'blog' =>array('id','title','time','click','_type' => 'LEFT'),
        'cate' =>array('name','_on' =>'blog.cid = cate.id'),
    );
}