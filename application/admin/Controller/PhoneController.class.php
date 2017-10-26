<?php
namespace admin\Controller;
use Think\Controller;

class PhoneController extends Controller{
	public function index(){
		$news=D('Phone');
		$Model=M('model_number');
		$pro=$news->getSI($Model);

		$this->assign('pro',$pro);
		$this->display();
	}
}