<?php
//声明命名空间
namespace Admin\Controller;
//引入控制器父类
use Think\Controller;
//定义当前控制器类
class IndexController extends CommonController{
    public function index(){
        //查询用户简历数
        $data['resume'] = D('resume')->count();
        //查询招聘职位数
        $data['job'] = D('job')->count();
        //查询友情链接数
        $data['links'] = D('links')->count();
        //查询已验证用户数
        $data['user_t'] = D('users')->where(['type' => 1,'state'=>1])->count();
        //查询未验证用户数
        $data['user_f'] = D('users')->where(['type' => 1,'state'=>0])->count();
        //查询已验证企业用户数
        $data['company_t'] = D('company')->where(['state'=>1])->count();
        //查询未验证企业用户数
        $data['company_f'] = D('company')->where('state=0 OR state=2 OR state=3')->count();
        //查询普通用户信息
        $data['users'] = D('users')->where(['type' => 1])->count();
        //查询企业用户信息
        $data['companys'] = D('company')->count();
        //用户信息总数
        $count = $data['companys'] + $data['users'];
        //dump($count);die;
        //普通用户百分比
        $data['percent_user'] = round(floatval($data['users'] / $count),4);
        //公司用户百分比
        $data['percent_comp'] = 1 - $data['percent_user'];
        //dump($data['percent_user']);die;
        $this->assign('data',$data);
        $this->display();
    }
}