<?php 
namespace Home\Controller;
use Think\Controller;
class SubscribeController extends Controller{
	public function index(){
		$data = session('person');
		$user_data = D('Users') -> where(array('id' => 1)) ->find();
		//通过用户id查询订阅表展现信息
		$subscribe_data = D('Subscribe') -> where(['uid' => 1]) ->select();
		$this->assign('subscribe_data',$subscribe_data);
		//把可以已选择的职业分类信息
		$cate_data1 = D('JobCategory') -> select();
		$cate_data = getTree($cate_data1);
		$this->assign('cate_data',$cate_data);
		//领域信息也要传递过去
		$trade_data = D('Trade') -> select();
		$this->assign('trade_data',$trade_data);
		// dump($user_data);
		$this->display();
	}
	public function add(){
		$data = D('Users') -> where(['id' => 1]) -> find();
		session('person',$data);
		//查询所有行业信息展示到页面
		$cate_data = D('JobCategory') -> select();
		$cate_data = getTree($cate_data);
		$this->assign('cate_data',$cate_data);
		//查询领域表，将获取领域信息
		$trade_data = D('Trade') -> select();
		$this->assign('trade_data',$trade_data);
		$this->display();
		}
	public function ajaxadd(){
		$data = I('post.');
		$res = D('Subscribe') -> add($data);
		if($res){
			$response = ['code' => 10000,
						 'msg'  => '添加成功'
						];
			$this->ajaxReturn($response);
		}else{
			$response = ['code' => 10000,
						 'msg'  => '添加失败'
						];
			$this->ajaxReturn($response);
		} 			
	}
}

?>