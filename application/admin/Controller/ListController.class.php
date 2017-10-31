<?php
namespace admin\Controller;
use Think\Controller;
class ListController extends AdminController {
    public function index(){

    	$news=D('Index');
    	$Model=M('information');

    	$obj=$news->getSI($Model);


    	$this->assign('obj',$obj);
        $this->display();
    }
}