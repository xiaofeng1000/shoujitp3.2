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
		$price1=$obj[0]['price1'];
		$price2=$obj[0]['price2'];
		$color=explode(",",$obj[0]['color']);

		$this->assign('price1',$price1);
		$this->assign('price2',$price2);
		$this->assign('color',$color);
		$this->assign('obj',$obj);
		$this->display();
	}


}