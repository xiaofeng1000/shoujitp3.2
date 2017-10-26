<?php
namespace admin\Controller;
use Think\Controller;

class SpoilageController extends Controller{
	public function index(){
		$news=D('Spoilage');
		$Model=M('classification');

		$obj=$news->getAll($Model);

		$this->assign('obj',$obj);
		$this->display();
	}

	public function delete(){
		//实例化模型
		$news=D('Spoilage');
		//接受ID
		$id=$_GET['id'];
		//实例化表
		$Model=M('classification');
		//调用模型方法
		$obj=$news->getDelete($Model,$id);

		if($obj){
			$this->success("删除损坏原因成功",U("Spoilage/index"));
			// $this->success("删除损坏原因成功"，U("Spoilage/index"));
		}else{
			$this->success("删除损坏原因失败",U("Spoilage/index"));
		}
	}
}