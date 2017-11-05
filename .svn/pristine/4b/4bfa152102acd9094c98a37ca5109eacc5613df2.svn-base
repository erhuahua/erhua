<?php
//声明命名空间
namespace Admin\Controller;
//引入控制器父类
use Think\Controller;
//定义当前控制器类
class TypeController extends Controller{
    public function index(){
        //查询并展示数据表
        $job_category = D('Job_category') -> where('pid = 0') -> select();
        $all =  D('Job_category') -> select();
        // var_dump($all);die;
        // dump($job_category);die;
        $this -> assign('job_category', $job_category);
        $this -> assign('all', $all);
        $this -> display();
    }
    //类新增
    public function add(){
        if(IS_POST){
            $data = I('post.');
            $model = D('Job_category');
            $create = $model -> create($data);
            if(!$create){
                $error = $model -> getError();
                $this -> error($error);
            }
            $res = $model -> add();
            if($res){
                $this -> success('新增成功', U('Admin/Type/index'));
            }else{
                $this -> error('新增失败');
            }
        }else{
            $top = D('Job_category') -> select();
            $this -> assign('top', $top);
            $this -> display();
        }
    }
    //类修改
    public function edit(){
        if(IS_POST){
            $data = I('post.');

            if(empty($data['name'])){
                $this -> error('名称不能为空');
            }
            $res = M('Job_category') -> save($data);
            if($res !== false){
                $this -> success('操作成功', U('Admin/Type/index'));
            }else{
                $this -> error('操作失败');
            }
        }else{
            $id = I('get.id');
            $info = M('Job_category') -> where(['id' => $id]) -> find();
            //查询顶级和二级分类
            $erji = [
                "
                path =  '0'  OR
                path = '0_1' OR
                path = '0_2' OR
                path = '0_3' OR
                path = '0_4' OR
                path = '0_5' OR
                path = '0_6'  "
            ];

            $info2 = D('Job_category') ->where($erji)->select();
            //dump($info2);die();
            $this -> assign('info2',$info2);
            $this -> assign('info',$info);
            // $this -> assign('data',$data);
            $this->display();



        }
    }
}