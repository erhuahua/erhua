<?php
//声明命名空间
namespace Admin\Controller;
//引入控制器父类
use Think\Controller;
//定义当前控制器类
class LoginController extends Controller{
    public function index(){
        //两个业务逻辑
        if($_POST){
            //表单提交
            $username = I('post.username');
            $password = I('post.password');
            //验证码校验
            $code = I('post.verify');
            //实例化Verify类,调用check方法
            $verify = new \Think\Verify();
            $check = $verify->check($code);
            if(!$check){
                //验证码错误
                $this->error('验证码错误');
            }
            //先查询用户名
            $info = D('Admin')->where(['username'=>$username])->find();
            //dump($info);die;
            //判断是否禁用
            if($info['status'] != 1){
                $this->error('用户禁用中,请联系管理员');
            }
            if($info && $info['password']==encrypt_password($password)){
                //登录成功
                //设置登录标示
                session('Admin_info',$info);
                $this->success('登录成功',U('Admin/Index/index'));
            }else{
                //登录失败
                $this->error('账号密码错误');
            }
        }else{
            $this->display();
        }

    }

    //生成验证码
    public function captcha(){
        //实例化Verify类
        $config = array(
            'useCurve'  =>  flase,    // 是否画混淆曲线
            'useNoise'  =>  false,    // 是否添加杂点
            'length'  =>  4,          // 设置验证码长度
        );
        $verify = new \Think\Verify($config);
        //调用enrty方法显示验证码
        $verify -> entry();
    }

    //退出登录
    public function logout(){
        //保存最后登陆时间和ip
        $id = session('Admin_info.id');
        //dump($id);die;
        $data=array(
            'login_time' =>time(),
            'login_ip' => get_client_ip()
        );
        M('Admin')->where(['id'=>$id])->save($data);
        //首先清空 session数据
        session(null);
        //跳转到登录页面
        $this->redirect('Admin/Login/index');
    }
}