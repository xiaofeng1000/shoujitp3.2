<?php
namespace admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	$news=D('Index');
    	$Model=M('information');

    	$obj=$news->getSI($Model);
    	// dump($_COOKIE['user']);
    	$user=$_COOKIE['user'];
    	$this->assign('user',$user);
    	$this->assign('obj',$obj);
        $this->display();
    }

}