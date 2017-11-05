<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	//注册页面
	public function register(){
		if(IS_POST){
			//处理表单提交
			$data = I('post.');
			$email = $data['username'];
			$model = D('Users');
			// $create = $model -> create($data);
			// if(!$create){
			// 	$error = $model -> getError();
			// 	$this -> ajaxRetun($error);
			// }
			$sql = $model-> where(['username' => $email]) -> find();
			// var_dump($sql);die;
			if($sql){
				$arr = [
					'code'	=> 103,
					'msg'	=> '用户名已存在'
				];
				$this -> ajaxReturn($arr);
			}
			if($email){
				//生成验证码,用于注册成功后发送激活邮件
				$email_code = mt_rand(1000, 9999);
				$data['email_code'] = $email_code;
			}
			$res = $model -> add($data);
			if($res){
				if($email){
					//主题
					$subject = "拉勾网注册激活邮件";
					//激活地址
					$url = U('Home/User/jihuo', array('id' => $res, 'code' => $email_code), '.html', true);
					//邮件内容
					$body = "team10项目组提醒：点击链接进行激活：<br><a href='$url'>$url</a><br>如果点击链接无法跳转，请复制地址到浏览器地址栏直接打开。";
					// var_dump($body);die;
					//邮件内容
					// $body = "team10项目组提醒：点击链接进行激活：<br><a href='$url'>$url</a><br>";
					$result = sendmail($email,$subject,$body);
					if($result !== true){
						$arr = [
							'code' => 1004,
							'msg' => '505~  内部服务器开小差了~  邮件发送失败，请稍后再试！'
						];
						//激活邮件发送失败
						$this -> ajaxReturn($arr);
					}else{
						$arr = [
							'code' => 1005,
							'msg' => '邮件发送成功，请前往邮箱进行激活操作！'
						];
						//激活邮件发送成功
						$this -> ajaxReturn($arr);
					}
				}
			}	
		}else{
			layout(false);
			$this -> display();
		}
	}

	//激活方法
	public function jihuo(){
		$data = I('get.');
		$user = D('Users') -> where(array('id' => $data['id'])) -> find();
		if($user && $user['email_code'] == $data['code']){
			$user['state'] = 1;
			// var_dump($user);die;
			D('Users') -> save($user);
			$this -> success('激活成功',U('Home/User/login'));
		}else{
			$this -> error('激活失败');
		}
 	}
 
	//登录首页
	public function login(){
		if(IS_POST){
			$username = I('post.username');
			$password = I('post.password');
			// var_dump($username,$passwrd);die;
			if(empty($username) || empty($password)){
				$this -> error('用户名或密码不能为空');
			}
			$user = D("Users") -> where(array('username' => $username)) -> find();
			if($user!= true){
				$arr = [
					'code'	=> 1001,
					'msg'	=> '用户名不存在'
				];
				$this -> ajaxReturn($arr);
			}
			// var_dump($user);die;
			if($user['password'] == md5($password)){
				session('person',$user);
				//var_dump(session('person'));die;
				$back_url = session("?back_url") ? session('back_url') : U('Home/User/login');
				$arr = [
					'code'	=> 1002,
					'msg'	=>'登录成功'
				];
				$this -> ajaxReturn($arr);
			}else{
				$arr = [
					'code'	=> 1003,
					'msg'	=>'用户名或密码错误，或未激活'
				];
				$this -> ajaxReturn($arr);
			}
		}		
		$this -> display();
	}
  	
  	//退出登录
  	public function logout(){
  		//清空所有session
		session(null);
		$this -> redirect('Home/User/login');
  	}

}

 ?>