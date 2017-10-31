<?php
namespace admin\Controller;
use Think\Controller;

 class AcceptController extends AdminController{
 	public function index(){
 		$news=D('Accept');
 		$Model=M('information');

 		$obj=$news->getSS($Model);

 		$this->assign('obj',$obj);
 		$this->display();
 	}
 }