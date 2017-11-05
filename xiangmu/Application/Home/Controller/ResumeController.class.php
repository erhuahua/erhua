<?php 
namespace Home\Controller;
use Think\Controller;
class ResumeController extends Controller{
	public function index(){
		if(IS_POST){

		}else{
			//展示个人简历页面
			//先获取登录后的个人信息session
			//$user_id = session('person.id');//获取id到简历表中查询用户简历
			//查询该用户简历信息
			$user_rid = 1;
			$resume_data = D('Resume') -> where(array('id' => $user_rid)) -> find();
			$user_data = D('Users')->where(array('id' => $user_rid)) ->find();
			session('person',$user_data);
			//期望工作
			$hopejob_data = D('Hopejob') -> where(array('rid' => $resume_data['id'])) -> find();
//			dump($hopejob_data);die;
			//工作经历
			$experience_data = D('workHistory') -> where(array('rid' => $resume_data['id'])) -> find();
//			dump($experience_data);die;
			//项目经验
			$project_data = D('Project') -> where(array('rid' => $resume_data['id'])) -> find();
//			dump($project_data);die;
			//学历信息
			$education_data = D('Education') -> where(array('rid' => $resume_data['id'])) -> find();
//			dump($education_data);die;
			//作品信息
			$show_data = D('showWorks') -> where (array('rid' => $resume_data['id'])) ->find();
			// dump($resume_data);
			// dump($hopejob_data);die;
			$this->assign('resume_data',$resume_data);
			$this->assign('hopejob_data',$hopejob_data);
			$this->assign('experience_data',$experience_data);
			$this->assign('project_data',$project_data);
			$this->assign('education_data',$education_data);
			$this->assign('show_data',$show_data);
			$this->display();
		}
	}
	public function basicEdit(){
		echo ok;
	}
	//在简历页面通过ajax修改某个用户的简历名称
	public function ajaxReResumeName(){
		$id = 1;
		$return = array(
			'code' => 10000,
			'msg'  => '简历名称修改成功',
			'data' => 'jack'
 			);
		$this->ajaxReturn($return);
	}
	//编辑修改基本信息
	//预览我的简历
	public function preview(){
		//从session中获取用户id
		//$user_rid = session('person.rid');
		$user_rid = 1;
		//根据用户id查询简历信息并显示
		$resume_data = D('Resume') -> where(array('id' => $user_rid)) ->find();
		if(!$resume_data){
			$this->error('你的简历信息还不够完善，再修改一下吧');
		}
		//查取工作经历表  并用公司联查获取公司logo图片
		$experience_data = D('workHistory')->alias('t1')->join('left join lg_company as t2 on t1.company = t2.short_name') -> field('t1.*,t2.name,t2.logo') ->where(array('t1.rid' => $resume_data['id'])) -> find();
		//查询期望工作
		$hopejob_data = D('Hopejob') -> where(array('rid' => $resume_data['id'])) -> find();
		//查询项目表 获取项目
		$project_data = D('Project') -> where(array('rid' => $resume_data['id'])) -> find();
		//查询学历
		$education_data = D('Education') -> where(array('rid' => $resume_data['id'])) -> find();
		//查询个人作品
		$show_data = D('showWorks') -> where(array('rid' => $resume_data['id'])) -> find();
		$this->assign('resume_data',$resume_data);
		$this->assign('hopejob_data',$hopejob_data);
		$this->assign('experience_data',$experience_data);
		$this->assign('project_data',$project_data);
		$this->assign('education_data',$education_data);
		$this->assign('show_data',$show_data);
		$this->display();
	}
}




 ?>