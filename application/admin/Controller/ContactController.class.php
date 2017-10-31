<?php
namespace admin\Controller;
use Think\Controller;

class ContactController extends AdminController{
	public function index(){
		$news=D('Contact');
		$Model=M('about');
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

		$news=D('Contact');
		$Model=M('about');

		$pro=$news->getUpdate($Model,$id,$data);

		if($pro){
			$this->success("修改成功",U("Contact/index"));
		}else{
			$this->success("修改失败",U("Contact/index"));
		}
	}
}