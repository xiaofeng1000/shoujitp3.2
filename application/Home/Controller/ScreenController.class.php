<?php
namespace Home\Controller;
use Think\Controller;

class ScreenController extends Controller{
	public function index(){
		$news=D('Screen');

		$Model=M('screen');

		$obj=$news->getIndexShow($Model);
		// $obj=$Model->select();

		// $arr=$Model->find();
		$color=explode(",",$obj[0]['color']);

		$this->assign('color',$color);
		$this->assign('obj',$obj);
		$this->display();
	}


}