<?php
namespace admin\Controller;
use Think\Controller;

class AcceptedController extends AdminController{
	public function index(){
		$news=D('Accepted');
		$Model=M('information');

		$obj=$news->getSeleteIndex($Model);

		$this->assign('obj',$obj);
		$this->display();
	}

	public function update(){
		$id=$_GET['id'];
		$news=D('Accepted');
		$Model=M('information');
		$data=array("accept"=>1);
		$pro=$news->getUpdate($Model,$id,$data);
		if($pro){
			$this->success("该订单已受理完成",U("Accept/index"));
		}else{
			$this->success("该订单未完成受理",U("Accepted/index"));
		}
	}
}