<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //查询职位类别表
        //使用无限极分类
        $cate_data = D('jobCategory') -> select();
        $this->assign('cate_data',$cate_data);
        //查询6个公司信息展示在页面上
        $company_data = D('Company') -> limit(6) -> select();
        $this->assign('company_data',$company_data);
        //查询最新招聘信息  职位表-公司表-公司标签表-标签表
        $job_msg = D('Job') ->field('t1.name jname,t1.email jemail,t1.company_id cid,t1.*,t2.name cname,t2.*,t3.*')-> alias('t1') -> join('left join lg_company as t2 on t1.company_id = t2.id left join lg_team as t3 on t1.company_id = t3.company_id') -> limit(10) ->order('t1.create_time desc') -> select();
        $msg_new = array();
        foreach($job_msg as $row){
            $company_tag = D('company_tag') -> alias('t1') -> field('t2.name') -> join('left join lg_tag as t2 on t1.tag_id = t2.id') -> where("t1.company_id = {$row['cid']}") -> select();
            $row['tag'] = $company_tag;
            // $row['create_time'] = (integer)((time() - $row['create_time'])/(8440));
            $row['create_time'] = mt_rand(1,20);
            $msg_new[] = $row;
        }
        $this->assign('msg_new',$msg_new);
        //查询最热招聘信息  职位表-公司表-公司标签表-标签表 
         $job_msg = D('Job') ->field('t1.name jname,t1.email jemail,t1.company_id cid,t1.*,t2.name cname,t2.*,t3.*')-> alias('t1') -> join('left join lg_company as t2 on t1.company_id = t2.id left join lg_team as t3 on t1.company_id = t3.company_id') -> limit(10) -> select();
        $msg_hot = array();
        foreach($job_msg as $row){
            $company_tag = D('company_tag') -> alias('t1') -> field('t2.name') -> join('left join lg_tag as t2 on t1.tag_id = t2.id') -> where("t1.company_id = {$row['cid']}") -> select();
            $row['tag'] = $company_tag;
            // $row['create_time'] = (integer)((time() - $row['create_time'])/(8440));
            $row['create_time'] = mt_rand(1,20);
            $msg_hot[] = $row;
        }
        $this->assign('msg_hot',$msg_hot); 
        //底部网站链接数据
        $this->display();
    }

    //登录页面
    public function login(){
        layout(false);
        $this->display();
    }

    //注册页面
    public function register(){
        //layout(false);
        $this->display();
    }


    //招聘信息,详情展示页面
    public function toudi(){
        $this->display();
    }

    //填写公司信息
    public function tag(){
        $this->display();
    }

    //公司信息填写完善成功后提示的页面，你可以发布职位啦！
    public function success(){
        $this->display();
    }

    //我的职位预定
    public function subscribe(){
        $this->display();
    }
    //我已预定的职位
    public function subscribe01(){
        $this->display();
    }

    //修改密码
    public function reset(){
        $this->display();
    }

    //个人简历(基本信息填写)
    //期望工作-工作经历-项目经验-教育背景-自我描述-作品展示
    public function jianli(){
        $this->display();
    }

    //个人简历展示页面
    public function preview(){
        $this->display();
    }

    //发布新职位->我发布的职位->有效职位
    public function positions(){
        $this->display();
    }

    //公司注册申请认证,详情信息填写页面
    //公司名称-地址-主页-规模-领域
    //公司产品
    //公司介绍
    //发布招聘职位信息
    public function myhome(){
        $this->display();
    }
    
    //拉勾网根据你的个人简历为你推荐以下职位：
    //推荐职位
    public function mlist(){
        $this->display();
    }
    
    //职位搜索列表页
    //list是关键字
    //public function list(){
    //    $this->display();
    //}

    //查看招聘信息详情页-投递简历(底部->登录->急速注册)(特效地图)
    public function jobdetail(){
        $this->display();
    }
    //查看招聘信息详情页-投递简历(第二种效果-无底部特殊效果)
    public function jobdetail1(){
        $this->display();
    }

    //填写公司信息的几个步骤
    //第①步:基本信息填写
    public function index01(){
        $this->display();
    }

    //填写公司信息的几个步骤
    //第③步:填写创始团队信息
    public function founder(){

    }

    //填写公司信息的几个步骤,
    //第④步,公司产品信息的填写
    public function index02(){
        $this->display();
    }

    //填写公司信息的几个步骤
    //第⑤步:公司介绍. 全部填写完成并保存
    public function index03(){
        $this->display();
    }

    //填写公司信息的几个步骤
    //公司信息详情展示-编辑-页面
    public function index04(){
        $this->display();
    }

    //填写公司信息的几个步骤
    //公司发布新职位,成功提示页面
    public function index06(){
        $this->display();
    }

    //HR-不合适简历列表
    public function haveRefuseResumes(){
        $this->display();
    }

    //个人用户-已投递的简历列表(全部-投递成功-被查看-通过初筛-通知面试-不合适)
    public function delivery(){
        $this->display();
    }
    
    //HR-发布新职位表单
    public function create(){
        $this->display();
    }

    //公司列表页展示
    public function companylist(){
        $this->display();
    }

    //per-我收藏的职位列表
    public function collections(){
        $this->display();
    }
    
    //HR-待定简历列表展示
    public function canInterviewResumes(){
        $this->display();
    }


    //HR-开通招聘服务
    //第①步:填写联系方式
    public function bindStep1(){
        $this->display();
    }
    //HR-开通招聘服务
    //第②步:填写公司名称
    public function bindStep2(){
        $this->display();
    }
    //HR-开通招聘服务
    //第③步:验证公司邮箱
    public function bindStep3(){
        $this->display();
    }

    //HR-招聘
    //自动过滤简历
    public function autoFilterResumes(){
        $this->display();
    }
    
    //CNP-申请公司认证页面(认证标准-上传公司营业执照)
    public function auth(){
        $this->display();
    }
    
    //CPN-申请公司认证提交审核操作完成页面
    public function authSuccess(){
        $this->display();
    }
    
    //per-用户账号绑定QQ/修改密码页面
    public function accountBind(){
        $this->display();
    }
    
    //联系我们,展示公司信息页面
    public function about(){
        $this->display();
    }
}

