<?php
namespace admin\Controller;
use Think\Controller;

class ScreenController extends AdminController{
	public function index(){
		$news=D('Screen');
		$Model=M('screen');

		$pro=$news->getSS($Model);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function add(){
		$this->display();
	}

	public function insert(){
		$number=$_POST['number'];
		$color=$_POST['color'];
		$price1=$_POST['price1'];
		$price2=$_POST['price2'];
		$data=array("model_number"=>$number,"color"=>$color,"price1"=>$price1,"price2"=>$price2);

		$news=D('Screen');
		$model=M('screen');

		$pro=$news->getInsertS($model,$data);

		if($pro){
			echo "ok";
		}
	}

	public function find(){
		$id=$_GET['id'];
		$news=D('Screen');
		$Model=M('screen');

		$pro=$news->getFindS($Model,$id);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function update(){
		$id=$_POST['id'];
		$model_number=$_POST['number'];
		$color=$_POST['color'];
		$price1=$_POST['price1'];
		$price2=$_POST['price2'];
		$data=array("model_number"=>$model_number,"color"=>$color,"price1"=>$price1,"price2"=>$price2);

		$news=D('Screen');
		$Model=M('screen');

		$pro=$news->getUpdateS($Model,$id,$data);

		if($pro){
			echo "ok";
		}else{
			echo "false";
		}
	} 

	public function delete(){
		$id=$_GET['id'];
		$news=D('Screen');
		$Model=M('screen');

		$pro=$news->getDeleteS($Model,$id);

		if($pro){
			$this->success("删除记录成功！",U("Screen/index"));
		}else{
			$this->success("删除记录失败！",U("Screen/index"));
		}
	}
}
