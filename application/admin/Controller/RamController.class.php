<?php
namespace admin\Controller;
use Think\Controller;

class RamController extends Controller{
	public function index(){
		$news=D('Ram');
		$Model=M('Ram');
		$pro=$news->getSelect($Model);
		$this->assign('pro',$pro);
		$this->display();
	}

	public function delete(){
		$id=$_GET['id'];
		// dump($id);
		$news=D('Ram');
		$Model=M('Ram');
		$pro=$news->getDelete($Model,$id);
		// echo $Model->getLastSql();
		// dump($pro);
		if($pro){
			$this->success("删除升级内存成功",U("Ram/index"));
		}else{
			$this->success("删除升级内存失败",U("Ram/index"));
		}
	}
	
	public function find(){
		$id=$_GET['id'];
		$news=D('Ram');
		$Model=M('Ram');
		$pro=$news->getFind($Model,$id);
		$this->assign('pro',$pro);
		$this->display();
	}

	public function update(){
		$id=$_POST['id'];
		$number=$_POST['number'];
		$Ram=$_POST['Ram'];
		$data=array("number"=>$number,"Ram"=>$Ram);

		$news=D('Ram');
		$Model=M('Ram');
		$pro=$news->getUpdateShow($Model,$data,$id);
		if($pro){
			echo "ok";
		}else{
			echo "false";
		}
	}

	public function add(){
		$this->display();
	}

	public function insert(){
		$number=$_POST['number'];
		$Ram=$_POST['Ram'];
		$data=array("number"=>$number,"Ram"=>$Ram);

		$news=D('Ram');
		$Model=M('Ram');
		$pro=$news->getAdd($Model,$data);
		if($pro){
			echo "ok";
		}else{
			echo "false";
		}
	}
}