<?php 
namespace Home\Controller;
use Think\Controller;

class FaultController extends Controller{
	public function index(){
		$news=D('Fault');

		$bid=$_GET['id'];

		$Model=M('Model_number');
		$Model2=M('classification');

		$arr1=$news->getShowIndex($Model2);
		$pro=$news->getShowIndex($Model,$bid);

		// $pro=$Model->where("bid=".$bid)->find();
		// $arr1=$Model2->select();
		// echo $Model->getLastSql();
		// dump($pro['path']);
		// dump($arr1);
		// exit;
		$this->assign('arr1',$arr1);
		$this->assign('pro',$pro);
		$this->display();
	}

	public function insert(){
		$news=D('Fault');
		$Model_number=$_POST['Model_number'];
		$color=$_POST['color'];
		$Damage_reason=$_POST['Damage_reason'];
		$total_cost=$_POST['total_cost'];
		$Model=M('information');

		$data=array("image"=>"","Model_number"=>$Model_number,"color"=>$color,"Damage_reason"=>
			$Damage_reason,"total_cost"=>$total_cost);

		
		$pro=$news->getAdd($Model,$data);
		// $pro=$Model->add($data);
		
		if($pro){
			echo $pro;
		};
	}

}