<?php
namespace Home\Controller;
use Think\Controller;

class PhonetypeController extends Controller{
	public function index(){

		$news = D('Phonetype');

		$Mod=M('model_number');
		$Model1=M('shouji');


		$pro=$news->getSelectShow($Model1);
		$arr=$news->getSelectShow($Mod);
		$arr1=$news->getSelectShow($Mod);
		dump($arr);
		dump($arr1);
		// $this->assign('pro',$pro);
		$this->assign('arr',$arr);
		$this->assign('arr1',$arr1);
		$this->display();
	}
}