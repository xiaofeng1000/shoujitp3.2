<?php
namespace admin\Controller;
use Think\Controller;

class BrandController extends Controller{
	public function index(){
		$news=D('Brand');
		$Model=M('shouji');
		$obj=$news->getBrand($Model);
		$this->assign('obj',$obj);
		$this->display();
	}
}