<?php
//声明命名空间
namespace Admin\Controller;
//引入控制器父类
//use Think\Controller;
//定义当前控制器类
class LinkController extends CompanyController{
	//查询并展示数据表
    public function index(){
    	$links = D('Links') -> select();

//	   	$links = getTree($links);

    	$this -> assign('links', $links);

        $this -> display();
    }
    //友情链接新增
    public function add(){
    	if(IS_POST){
    		$data = I('post.');
    		$model = D('Links');
    		$create = $model -> create($data);
    		if(!$create){
    			$error = $model -> getError();
    			$this -> error($error);
    		}
    		$res = $model -> add();
    		if($res){
    			$this -> success('新增成功', U('Admin/Link/index'));
    		}else{
    			$this -> error('新增失败');
    		}
    	}else{
    		$top = D('Links') -> where("id = 0") -> select();
    		$this -> assign('top', $top);
        	$this -> display();
        }
	}
	//修改
    public function edit(){
		if(IS_POST){
			$data = I('post.');
			
			if(empty($data['name'])){
				$this -> error('名称不能为空');
			}
			$res = M('Links') -> save($data);
			if($res !== false){
				$this -> success('操作成功', U('Admin/Link/index'));
			}else{
				$this -> error('操作失败');
			}
		}else{
			$id = I('get.id');
			// var_dump($id);die;
			$info = M('Links') -> where(['id' => $id]) -> find();
			$this -> assign('info',$info);
			$this->display();
		}	
	}
	//删除
	public function del(){
		$id = I('get.id');
		if($id <= 0){
			$this -> error('参数错误');
		}
		$res = M('Links') -> delete($id);
		if($res !== false){
			$this -> success('操作成功', U('Admin/Link/index'));
		}else{
			$info = M('Links') -> where(['id' => $id]) -> find();
			$this -> error('操作失败');
		}
	}
}