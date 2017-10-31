<?php
namespace Home\Controller;
use Think\Controller;
class AdoutController extends Controller {
    public function index(){
    	$news=D('Adout');
    	$Model=M('about');
    	$pro=$news->getSelect($Model);

    	$this->assign('pro',$pro);
        $this->display();
    }
}