<?php
//声明命名空间
namespace Admin\Model;
//引入父类模型
use Think\Model;
//定义当前的模型类
class LinksModel extends Model{

    protected $fields = array(
        'id',
        'name',
        'url',
        'create_time',
        'state'
    );
    //自动验证
     protected $_validate = array(
         array('url','url','URL格式不正确'),
     );
    //自动完成
    protected $_auto = array(
        array('create_time', 'time', 1, 'function')
    );

}