<?php
namespace Home\Controller;
use Think\Controller;
class HelpController extends Controller {
    public function index(){
    	$news=D('Help');
    	$Model=M('help_center');
    	$pro=$news->getSelect($Model);

    	$this->assign('pro',$pro);
        $this->display();
    }
}