<?php
namespace admin\Controller;
use Think\Controller;

class JoinController extends AdminController{
	public function index(){
		$news=D('Join');
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

		$news=D('Join');
		$Model=M('about');

		$pro=$news->getUpdate($Model,$id,$data);

		if($pro){
			$this->success("修改成功",U("Join/index"));
		}else{
			$this->success("修改失败",U("Join/index"));
		}
	}
}