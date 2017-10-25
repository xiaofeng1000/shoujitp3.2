<?php
namespace admin\Controller;
use Think\Controller;

class ModifController extends Controller{
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
}