<?php
namespace admin\Controller;
use Think\Controller;

class ModifController extends AdminController{
	public function index(){
		$news=D('Modif');

		$Model=M('shouji');
		$pro=$news->getIS($Model);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function insert(){
		$brand=$_POST['brand'];
		$news=D('Modif');
		$Model=M('shouji');
		$data=array("brands"=>$brand);
		$pro=$news->getAS($Model,$data);
		echo $Model->getLastSql();
		if($pro){
			echo "ok";
		}
	}

	public function delete(){
		$id=$_GET['id'];
		$news=D('Modif');
		$Model=M('shouji');
		$pro=$news->getDS($Model,$id);
		if($pro){
			$this->success("删除记录成功！",U("Brand/index"));
		}else{
			$this->success("删除记录失败！",U("Brand/index"));
		}
	}

	public function show(){
		$id=$_GET['id'];
		$news=D('Modif');
		$Model=M('shouji');
		$pro=$news->getFS($Model,$id);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function update(){
		$id=$_POST['id'];
		$brand=$_POST['brand'];
		$data=array("brands"=>$brand);

		$Model=M('shouji');
		$news=D('Modif');

		$pro=$news->getUS($Model,$id,$data);

		if($pro){
			echo "ok";
		}
	}
}