<?php
namespace Home\Controller;
use Think\Controller;
class CollectionController extends commonController{
    public function index(){
    	$user_id = session('pserson');
    	$collection_data = D('UserCol') ->field("t1.*,t1.id mid,t2.*,t2.name jname,t3.*")-> alias('t1') -> join('join lg_job t2 on t1.job_id = t2.id join lg_company t3 on t2.company_id = t3.id') -> where("t1.uid = 1") -> select();
    	// dump($collection_data);die;
    	$this->assign('collection_data',$collection_data);
        $this->display();
    }
    //在页面上取消删除
    public function ajaxdelete(){
    	$id = I('post.id');
    	$res = D('UserCol') -> where(['id' => $id]) -> delete();
    	if($res){
    		$response=[
    		'code' => 10000,
    		'msg'  => '删除成功'
    		];
    	}else{
    		$response=[
    		'code' => 10001,
    		'msg'  => '删除失败'
    		];
    	}
    	$this->ajaxReturn($response);
    }
}