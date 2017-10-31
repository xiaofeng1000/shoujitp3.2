<?php
namespace admin\Controller;
use Think\Controller;

class ProcessController extends AdminController{
	public function index(){
		$news=D('Process');
		$Model=M('help_center');
		$pro=$news->getSF($Model);
		// echo $pro['content'];
		// dump($pro);
		$this->assign('pro',$pro['content']);
		$this->assign('obj',$pro);
		$this->display();
	}

	public function update(){
		$id=$_POST['id'];

		$content=$_POST['content'];
		$data=array("content"=>$content);

		$news=D('Process');
		$Model=M('help_center');

		$pro=$news->getUpdate($Model,$id,$data);

		if($pro){
			$this->success("修改成功",U("Process/index"));
		}else{
			$this->success("修改失败",U("Process/index"));
		}
	}
}