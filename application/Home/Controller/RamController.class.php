<?php
namespace Home\Controller;
use Think\Controller;

class RamController extends Controller{
	public function index(){
		$news=D('Ram');
		$Model=M('Ram');
		$obj=$news->getShowIndex($Model);
		$ram=explode(",",$obj[0]['Ram']);
		// dump($ram);
		// $obj=$Model->select();
		$this->assign('ram',$ram);
		$this->assign('obj',$obj);
		$this->display();
	}

	public function insert(){
		$news=D('Ram');
		$model_number=$_POST['Model_number'];
		echo $Model_number;
		$Damage_reason=$_POST['Damage_reason'];
		$user=$_POST['user'];
		$Contact=$_POST['Contact'];
		$path=$_POST['path'];
		$Service=$_POST['Service'];
		$price=$_POST['price'];

		$data=array("Model_number"=>$model_number,"Damage_reason"=>$Damage_reason,"user"=>$user,"Contact"=>$Contact,"path"=>$path,"Service"=>$Service,"total_cost"=>$price,"time"=>time());
		// dump($data);
		$Mod=M('information');

		$pro=$news->getAdd($Mod,$data);
		// $pro=$Mod->add($data);

		if($pro){
			echo "ok";
		}

	}

	public function select(){
		$id=$_POST['id'];
		$news=D('Ram');
		$Model=M('Ram');
		$pro=$news->getFind($Model,$id);
		$ram=explode(",",$pro['Ram']);
		if($ram){
			$ram1=json_encode($ram);
			echo $ram1;
		}
	}
}
