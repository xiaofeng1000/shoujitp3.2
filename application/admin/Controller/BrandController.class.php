<?php
namespace admin\Controller;
use Think\Controller;

class BrandController extends AdminController{
	public function index(){
		$news=D('Brand');
		$Model=M('shouji');
		$obj=$news->getBrand($Model);
		$this->assign('obj',$obj);
		$this->display();
	}
}