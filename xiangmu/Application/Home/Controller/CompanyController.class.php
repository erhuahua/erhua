<?php
/**
 * Created by Seven.
 * Date: 2017/10/11
 * Time: 10:45
 */

namespace Home\Controller;

use Think\Controller;
use Think\Upload;

class CompanyController extends Controller
{
    public function index()
    {
        $model1 = M('Company');
        $model2 = M('Trade');
        $model3 = M('Company_stage');
        //$model4 = M('Job');
        $data   = $model1->limit(15)->select();
        $trade  = $model2->select();
        $stage  = $model3->select();
        //$job    = $model4->select();
        //$j    = $model4->where($data['id']=$job['company_id'])->select();
        //dump($j);die;
        //条数有问题
        //$model=D('Company');
        //$data = $model -> alias('c') -> join('left join lg_job as j on c.id = j.company_id')->where('c.id=j.company_id') ->limit(15)->select();


        //dump($data);die;
        $this->assign('data', $data);
        $this->assign('trade', $trade);
        $this->assign('stage', $stage);
        //dump($data);die;
        $this->display();
    }

    //公司认证
    public function auth(){
        $this->display();
    }


    //公司认证2步骤
    public function bindStep1(){
        $data=I('post.');
        //static $cmp=array();
        if(IS_POST) {
            if($data['yanzheng'] == 1){
                session('data',$data);
                //dump(session());die;
            }
            redirect('bindStep2');

            //success(null, U('Home/Company/bindStep2'));
        }else{

            $this->display();
        }
    }

    public function bindStep2(){
        //dump(session());die;
        //$cmpname=I('post.');
        if(IS_POST){

            $data = session('data');
            $data['name']=I('post.companyName');
            //$this->display('bindStep3');
            session('data',$data);
            //dump(session());die;

            $model=M('Company');
            $data=session("data");
            //dump($data);die;
            $res=$model->add($data);
            if(!$res){
                redirect('bindStep2');
                //$this->success('发送成功', U('Home/company/bindStep3'));
            }else{

                redirect('bindStep3');
            }

        }else{

            $this->display('bindStep2');
        }
    }

    //备份

    //公司招聘信息详情

    //public function showCompany(){
    //    $id=I('get.id');
    //    //dump($id);
    //    $model=M('Company');
    //    $data = $model -> alias('c') -> join('right join lg_job as j on c.id = j.company_id')->where(['j.company_id'=> $id ] )->limit(15)->select();
    //    $data['con']=count($data);
    //    //$data = $model->where($id)->find();
    //
    //
    //    //foreach($data as $k=> $v){
    //    //    $data['desc']=$v['desc'];
    //    //    $data=$v;
    //    //    //dump($data);
    //    //}
    //
    //    dump($data);die;
    //    $this->assign('data',$data);
    //    $this->display();
    //}

    
    //公司详情--招聘信息
    public function showCompany(){
        $id=I('get.id');
        //dump($id);
        $model=D('Company');
        //查询公司详细信息
        $cmp=$model->where(['id'=>$id])->select();
        //联表查询公司tag标签
        $ctag=$model
            ->alias('c')
            ->join('left join lg_company_tag as cmpid on c.id = cmpid.company_id left join lg_tag as tagid  on cmpid.tag_id = tagid.id ')
            ->where(['c.id'=>$id])
            ->field('tagid.name')
            ->select();
        //dump($ctag);die;

        //查询公司所有在招职位
        $model1=M('Job');
        $cjob = $model1->where(['company_id' => $id])->select();
        //统计在招职位数量
        $c=count($cjob);
        //dump($c);die;

        //dump($cmp);die;
        //$data = $model -> alias('c') -> join('left join lg_job as j on c.id = j.company_id')->field('desc')->where(['j.company_id'=> $id ] )->select();
        //$data['con']=count($data);
        //$data = $model->where($id)->find();
        //foreach($data as $k=> $v){
        //    $data['desc']=$v['desc'];
        //    $data=$v;
        //    //dump($data);
        //}
        //dump($data);die;
        //绑定公司详情信息--招聘职位信息
        $this->assign('cmp',$cmp);
        //绑定公司所有在招职位
        $this->assign('cjob',$cjob);
        //绑定公司所有在招职位个数
        $this->assign('c',$c);
        //绑定公司tag标签
        $this->assign('ctag',$ctag);
        $this->display();
    }
    
    
    //公司招聘职位信息-详情
    public function jobInfo(){
        
        $id=I('get.id');
        $cid=I('get.cid');
        //dump($cid);die;
        $model=D('Job');
        $job_info = $model->where(['id' => $id])->select();
        //根据招聘信息company_id获取对应公司信息
        $cmp_model=D('Company');
        $cmp_info=$cmp_model->where(['id'=>$cid])->select();

        //dump($data);die;
        $this->assign('cmp_info',$cmp_info);
        $this->assign('job_info',$job_info);
        $this->display();
    }
    

    //上传公司营业执照方法
    public function uploadFile(){

        //上传图片存到session里

        //上传文件
        if($_FILES['file']['error']=='0'){
            //定义配置
            $cfg=[
                //保存根路径
                'rootPath'  =>  './Public/Uploads/',
            ];
            //dump($cfg);die;
            $upload = new Upload($cfg);
            $info=$upload->uploadOne($_FILES['file']);
            //dump($info);die;
            //判断操作结果
            if($info){
                //返回成功信息
                $response=[
                    'code' => '0',
                    'message' => '上传成功!',
                    //'path' => $cfg['rootPath'],
                    'path'=>$upload->rootPath.$info['savepath'].$info['savename'],
                ];
            }else{
                //返回错误信息
                $response = [
                    'code' => '1',
                    'message' => $upload->getError(),
                ];
            }
            //ajax输出
            $this->ajaxReturn($response);
        }
    }
     //发布招聘信息
    public function create(){
        if(IS_POST){
            $data = I('post.');
            // var_dump($data);die;
            $model = D('job');
            // if($data['address'] == ''){
            //     $arr = [
            //         'code'  => 10010,
            //         'msg'   => '地址不能为空'
            //     ];
            //     $this -> ajaxReturn($arr);
            // }
            $res = $model -> add($data);
            if( !$res ){
                $arr = [
                    'code'  => 1001,
                    'msg'   => '创建失败'
                ];
                $this -> ajaxReturn($arr);
            }else{
                $arr = [
                    'code'  => 1002,
                    'msg'   => '创建成功'
                ];
                $this -> ajaxReturn($arr);
            }
        }else{
        $this -> display();
        }
    }

    //待处理简历
    public function waitResumes(){
        // if(IS_POST){
        //     $name = I('get.state1');
        //     $model = D('Send');
        //     $data = $model -> where(array('state1' => $state1)) -> save();
        //     if(!$data){
        //         $arr = [
        //             'code'  => 1003,
        //             'msg'   => '未加入通知面试成功'
        //         ];
        //         $this -> ajaxReturn($arr);
        //     }else{
        //         $arr = [
        //             'code'  => 1004,
        //             'msg'   => '加入通知面试成功'
        //         ];
        //         $this -> ajaxReturn($arr);
        //     }
        // }else{
        //     $user_data = session('person');
        //     $compant_data = D('Company') -> where(['id'])
        //     $this -> display();
            
        // }
        // 查询用户信息可以从$data = session('perseon') 中获取
        $user_data = D('Users') -> where('id = 1') -> find();
        //获取用户信息后，通过用户和公司的关联表 user_company 查询该用户对应的公司
        $company_data = D('UserCompany') -> where(['user_id' => $user_data['id']]) ->find();
        //查询得到company_id就可以到send简历投递表中，获取该公司到底收到了投递信息
        $send_data = D('Send') -> where(['company_id' => $company_data['company_id']]) -> select();
        //通过send表中的user_id字段，查询用户的简历 company_id查询公司的信息  job_id查询岗位
        $send_data = D('Send') ->alias('t1') -> field('t1.*,t2.*,t3.*,t4.*,t3.name aaaaaaaaaname')-> join('join lg_users as t2 on t1.user_id = t2.id join lg_company as t3 on t1.company_id = t3.id join lg_job as t4 on t1.job_id = t4.id ') -> where(['t1.company_id' => $company_data['company_id']]) -> select();
        // dump($send_data);
    }
    
    //待定简历
    public function canInterviewResumes(){
        $this -> display();
    }

    //已通知简历
    public function noticeResumes(){
        $this -> display();
    }

    //不合适简历
    public function haveRefuseResumes(){
        $this -> display();
    }

     //有效职位
    public function positions(){
        $this -> display();
    }

    //自动过滤简历
    public function autoFilterResumes(){
        $this -> display();
    }

    //public function tag(){
    //    $this->display();
    //}


    
    
}
