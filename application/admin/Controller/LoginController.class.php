<?php
namespace admin\Controller;
use Think\Controller;

class LoginController extends Controller{
	public function index(){
		$this->display();
	}
	
	public function login(){
		$user=$_POST['user'];
		$password=$_POST['password'];
		$news=D('Login');
		$Model=M('user');
		$data=array("user"=>$user,"password"=>$password);
		$obj=$news->getLF($Model,$data);
		setcookie('user',$obj['user'],time()+3600,'/');
		
		if($obj){
			echo "ok";
		}else{
			echo "on";
		}
	}
}