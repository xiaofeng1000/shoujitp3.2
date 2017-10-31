<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller{
	function _initialize(){
		if(!isset($_COOKIE['user'])){
			$this->error("请登录",U("Login/index"));
			exit();
		}
	}
}