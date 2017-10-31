<?php
namespace admin\Controller;
use Think\Controller;

class BatteryController extends AdminController{
	public function index(){
		//实例化
		$news=D('Battery');
		$Model=M('battery');
		$pro=$news->getSF($Model);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function delete(){
		//接受ID
		$id=$_GET['id'];
		// dump($id);
		//实例化
		$news=D('Battery');
		$Model=M('battery');
		//调用模型
		$pro=$news->getDelt($Model,$id);
		// echo $Model->getLastSql();
		if($pro){
			$this->success("删除更换电池成功",U("Battery/index"));
		}else{
			$this->success("删除更换电池失败",U("Battery/index"));
		}
	}

	public function find(){
		//接受ID
		$id=$_GET['id'];
		//实例化
		$news=D('Battery');
		$Model=M('battery');

		$pro=$news->getFindS($Model,$id);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function update(){
		//接受数据
		$model_number=$_POST['number'];
		$val=$_POST['price'];
		$id=$_POST['id'];
		$data=array("model_number"=>$model_number,"val"=>$val);
		//实例化
		$news=D('Battery');
		$Model=M('battery');

		$pro=$news->getUpdateS($Model,$data,$id);

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
		//接受数据
		$model_number=$_POST['number'];
		$val =$_POST['price'];
		$data=array("model_number"=>$model_number,"val"=>$val);
		//实例化
		$news=D('Battery');
		$Model=M('battery');

		$pro=$news->getInsert($Model,$data);

		if($pro){
			echo "ok";
		}else{
			echo "false";
		}
	}
}