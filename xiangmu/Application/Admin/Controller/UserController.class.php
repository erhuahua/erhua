<?php
//声明命名空间
namespace Admin\Controller;
//引入控制器父类
use Think\Controller;
//定义当前控制器类
class UserController extends CommonController{
    public function index(){
        $this->display();
    }

    public function edit(){
        $this->display();
    }

    public function editpwd(){
        $this->display();
    }
}