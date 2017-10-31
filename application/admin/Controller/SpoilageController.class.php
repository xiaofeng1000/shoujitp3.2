<?php
namespace admin\Controller;
use Think\Controller;

class SpoilageController extends AdminController{
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

	public function find(){
		$news=D('Spoilage');
		$id=$_GET['id'];
		$Model=M('classification');
		$pro=$news->getUpdateIndex($Model,$id);
		$this->assign('pro',$pro);
		$this->display();	
	}

	public function update(){
		$id=$_POST['id'];
		// dump($id);
		$tabul=$_POST['tabul'];
		$ques1=$_POST['ques1'];
		$price1=$_POST['price1'];
		$ques2=$_POST['ques2'];
		$price2=$_POST['price2'];
		$data=array("tabulation"=>$tabul,"question1"=>$ques1,"The_price1"=>$price1,"question2"=>$ques2,"The_price2"=>$price2);
		$news=D('Spoilage');
		$Model=M('classification');
		$obj=$news->getUpdates($Model,$id,$data);
		// dump($data);
		// echo $Model->getLastSql();
		// var_dump($obj);
		if($obj){
			$this->success("成功",U("Spoilage/index"));
		}else{
			$this->success('失败',U("Spoilage/index"));
		}
			
	}

	public function add(){
		$this->display();
	}

	public function insert(){
		$tabul=$_POST['tabul'];
		$ques1=$_POST['ques1'];
		$price1=$_POST['price1'];
		$ques2=$_POST['ques2'];
		$price2=$_POST['price2'];
		$data=array("tabulation"=>$tabul,"question1"=>$ques1,"The_price1"=>$price1,"question2"=>$ques2,"The_price2"=>$price2);

		$news=D('Spoilage');
		$Model=M('classification');
		$pro=$news->getAdd($Model,$data);
		if($pro){
			echo "ok";
		}
	}
}