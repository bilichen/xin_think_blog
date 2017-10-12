
<?php

class BlogRelationModel extends RelationModel{

    protected $tableName = 'blog';

    protected $_link = array(
            'attr' =>array(
                'mapping_type'=>MANY_TO_MANY,
                'mapping_name'=>'attr',
                 'foreign_key'=>'bid',
                 'relation_foreign_key'=>'aid',
                 'relation_table'=>'hd_blog_attr',
            ),
         'cate'=>array( //博文和属性 一对多关系
            'mapping_name'=>'cate',
            'mapping_type'=>BELONGS_TO,//多（cate）关联一（blog）用 HAS_MANY，一（blog）关联多（cate）用BELONGS_TO
            'foreign_key'=>'id', //blog表中的博文id
            'mapping_fields'=>'name', //只读取name字段
            'as_fields'=>'name:cate' //把cate表的name字段取出作为主表blod的字段展示并且把name改成cate（避免字段重复）
        )
    );

    //获取博文列表（包括没有删除的博文和回收站的博文，通过参数$type区分）
    public function get_blogs($type = 0) { //默认是没有删除的博文
        $field = array('cid','del');
        $where = array('del'=>$type);
        return $this->field($field,true)->relation(array('cate','attr'))->where($where)->select();
    }

}
