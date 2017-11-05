<?php 
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
		//构造方法
		public function __construct(){
			parent::__construct();
			if(!session("?person.id")){
				$this -> redirect('User/login');
			}else{
				$this -> show();
			}
		}
		public function show(){
			$this -> display('index');
		}

}

 ?>