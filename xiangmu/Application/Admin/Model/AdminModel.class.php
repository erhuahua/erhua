<?php
//声明命名空间
namespace Admin\Model;
//引入父类模型
use Think\Model;
//定义当前的模型类
class AdminModel extends Model
{
    protected $fields = array(
        'id',
        'username',
        'password',
        'image',
        'gid',
        'status',
        'create_time',
        'login_time',
        'login_ip'
    );
    //自动验证
    protected $_validate = array(
        array('username', 'require', '用户名不能为空', 0, 'regex', 3),
        array('password', 'require', '密码', 0, 'regex', 3),
    );

    //自动完成
    protected $_auto = array(
        array('create_time', 'time', 1, 'function')
    );

}