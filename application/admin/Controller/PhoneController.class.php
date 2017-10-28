<?php
namespace admin\Controller;
use Think\Controller;

class PhoneController extends Controller{
	public function index(){
		$news=D('Phone');
		$Model=M('model_number');
		$pro=$news->getSI($Model);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function add(){
		$news=D('Phone');
		$Model=M('shouji');
		$pro=$news->getAS($Model);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function insert(){
		$brand=$_POST['brand'];
		$Model_number=$_POST['Model_number'];
		$ty=$_POST['ty'];
		if($ty=='手机'){
			$data=array("brands"=>$brand,"Model_number"=>$Model_number,"phone"=>1,"pad"=>0);
		}else{
			$data=array("brands"=>$brand,"Model_number"=>$Model_number,"phone"=>0,"pad"=>1);
		}
		
		$news=D('Phone');
		$Model=M('model_number');
		$obj=$news->getIS($Model,$data);
		if($obj){
			echo "ok";
		}
	}

	public function delete(){
		$id=$_GET['id'];
		$news=D('Phone');
		$Model=M('Model_number');

		$pro=$news->getDF($Model,$id);

		if($pro){
			$this->success("删除型号成功",U("Phone/index"));
		}else{
			$this->success("删除型号失败",U("Phone/index"));
		}
	}

	public function find(){
		$id=$_GET['id'];
		$news=D('Phone');
		$Model=M('model_number');
		$Model2=M('shouji');
		$pro=$news->getUF($Model,$id);
		$obj=$news->getUF($Model2);
		$this->assign('obj',$obj);
		$this->assign('pro',$pro);
		$this->display();
	}

	public function update(){
		$id=$_POST['id'];
		$number=$_POST['number'];
		$brand=$_POST['brand'];
		$ty=$_POST['type'];
		$news=D('Phone');
		$Model=M('model_number');
		// dump($brand);
		// dump($ty);
		if($ty=='手机'){
			$data=array("brands"=>$brand,"Model_number"=>$number,"phone"=>1,"pad"=>0);
		}elseif($ty=='平板'){
			$data=array("brands"=>$brand,"Model_number"=>$number,"phone"=>0,"pad"=>1);
		}

		$pro=$news->getUS($Model,$id,$data);
		// echo $Model->getLastSql();
		// dump($pro);
		if($pro){
			$this->success("修改手机型号成功",U("Phone/index"));
		}else{
			$this->success("修改手机型号失败",U("Phone/index"));
		}
	}
}