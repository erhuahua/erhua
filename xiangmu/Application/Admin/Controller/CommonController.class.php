<?php
//声明命名空间
namespace Admin\Controller;
//引入控制器父类
use Think\Controller;
//定义当前控制器类
class CommonController extends Controller{
    public function __construct(){
        parent::__construct();
        //登录判断
        if(!session('?Admin_info')){
            $this->redirect('Admin/Login/index');
        }
    }
}