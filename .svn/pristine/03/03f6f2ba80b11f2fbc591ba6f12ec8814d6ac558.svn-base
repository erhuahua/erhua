<?php
//声明命名空间
namespace Admin\Controller;
//引入控制器父类
use Think\Controller;
//定义当前控制器类
class ManagerController extends CommonController{
    //增加方法
    public function index(){
        $data = D('Admin')-> select();
        $this->assign('data',$data);
        //dump(__CONTROLLER__);die;
        //dump($data);die;
        $this->display();
    }

    //增加方法
    public function add(){
        //一个方法处理两个业务逻辑
        //判断请求方式
        if(IS_POST){
            //处理表单提交
            //接收数据
            $data = array(
                'username'=>I('post.username'),
                'password'=>encrypt_password(I('post.password')),
                'gid'=>I('post.gid'),
            );
            //dump($data);die;
            //添加数据
            $model = D('Admin');
            $create = $model -> create($data);
            if(!$create){
                $error = $model->getError();
                $this->error($error);
            }
            $res = $model -> add();
            //判断返回结果
            if($res){
                //添加成功
                $this ->success('添加成功',U('Admin/Manager/Index'),1);
            }else{
                //添加失败
                $this->error('添加失败');
            }
        }else{
            //展示页面
            $this->display();
        }
    }

    //编辑方法
    public function edit(){
        if(IS_POST){
            //接收数据
            $manager = I('post.');
            //文件上传$_FILES
            if(!isset($_FILES['image']) || $_FILES['image']['error'] != 0){
                //需要上传image图片
                $this->error('图片上传失败');
            }
            //dump($_FILES);

            //自定义配置数组 实例化upload类
            $config = array(
                'maxSize'   =>  5*1024*1024,//上传文件大小限制 单位b
                'exts'      =>  array('jpg','gif','png','jpeg'),//允许上传文件后缀
                'rootPath'  =>  ROOT_PATH.UPLOAD_ADMIN,//保存根路径
            );
            //var_dump($config['rootPath']);die;
            $upload = new \Think\Upload($config);
            if(isset($_FILES['image'])){
                //使用uoloadOne完成文件上传
                $upload_res = $upload->uploadOne($_FILES['image']);
                if(!$upload_res){
                    //文件上传失败,调用upload类的geterror方法获取错误信息
                    $error = $upload ->getError();
                    $this -> error($error);
                }
                //dump($upload_res);die;
                $manager['image'] = UPLOAD_PATH.$upload_res['savepath'].$upload_res['savename'];
            }
            //修改数据表中的记录
            $model = D('Admin');

            //dump($manager['id']);die;
            $res = $model ->where(['id'=>$manager['id']])-> save($manager);

            //$res 是受影响的记录条数
            if($res!== false){
                //修改成功
                $this->success('修改成功',U('Admin/Manager/index'));
            }else{
                //修改失败
                $this->error('修改失败');
            }
        }else{
            $id=I('get.id');
            $data = D('Admin')-> where(['id' => $id])->find();
            //dump($data);die;
            $this->assign('data',$data);
            $this->display();
        }
    }

    //删除方法
    public function del(){
        //接收参数
        $id = I('get.id');
        //删除数据
        $model = D('Admin');
        $res = $model -> where(['id'=>$id]) -> delete();
        if($res !== false){
            //删除成功
            $this->success('删除成功',U('Admin/Manager/index'));
        }else{
            //删除失败
            $this->error('删除失败');
        }
    }

    //字段查找
    public function finds(){
        $keyword = I('post.username');
        //dump($keyword);die;
        $find_msg['username'] = array('like',"%$keyword%");
        $data = D('Admin')->where($find_msg)->select();
        $this->assign('data',$data);
        $this->display('index');
    }

    public function editpwd(){
        if(IS_POST){
            //接收参数
            $id = I('post.id');
            //旧密码
            $pwd_old = encrypt_password(I('post.password'));
            //新密码1
            $pwd_new1 = encrypt_password(I('post.password1'));
            //新密码2
            $pwd_new2 = encrypt_password(I('post.password2'));
            //判断密码1和密码2是否相同
            $res = $pwd_new1===$pwd_new2;
            if(!$res){
                $this->error('两次密码输入不同');
            }
            //判断旧密码是否与数据库相同
            $data = D('Admin')->where(['id'=>$id])->find();
            //dump($data);die;
            $result = $data['password']===$pwd_old;
            //dump($result);die;
            if(!$result){
                $this->error('旧密码不正确');
            }
            //保存新密码
            $resu = D('Admin')->where(['id' => $id])-> setField('password',$pwd_new1);
            if(!$resu){
                $this->error('修改密码失败');
            }else{
                $this->success('修改成功',U('Admin/Index/index'));
            }

        }else{
            $this->display();
        }

    }
}