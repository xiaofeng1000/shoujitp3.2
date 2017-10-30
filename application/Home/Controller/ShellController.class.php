<?php
namespace Home\Controller;
use Think\Controller;

class ShellController extends Controller{
	public function index(){
		$news=D('Shell');
		$Model=M('shell');
		$pro=$news->getShowIndex($Model);
		// $pro=$Model->select();

		// $arr=$Model->where()->find();

		// $arr=$Model->find();

		$color=explode("，",$pro[0]['colorprice']);
		// echo $Model->getLastSql();
		// dump($color);

		$this->assign('color',$color);
		$this->assign('pro',$pro);
		$this->display();
	}

	public function select(){
		$news=D('Shell');
		$id=$_POST['id'];
		// dump($id);
		$Model=M('shell');
		// $pro=$Model->where("sid=".$id)->find();
		$pro=$news->getFind($Model,$id);

		$color=explode("，",$pro['colorprice']);
		if($color){
			$color1=json_encode($color);

			echo $color1;

		}
	}

	public function insert(){
		$news=D('Shell');
		

		$Model_number=$_POST['Model_number'];
		$color=$_POST['color'];
		$Damage_reason=$_POST['Damage_reason'];
		$user=$_POST['user'];
		$Contact=$_POST['Contact'];
		$path=$_POST['path'];
		$Service=$_POST['Service'];
		$price=$_POST['price'];
		// dump($price);
		$data=array("Model_number"=>$Model_number,"color"=>$color,"Damage_reason"=>$Damage_reason,"user"=>$user,"Contact"=>$Contact,"path"=>$path,"Service"=>$Service,"total_cost"=>$price,"time"=>time());
		// dump($data);
		$Model=M('information');
		// $obj=$news->getAdd($Model,$data);

		$obj=$Model->add($data);

		if($obj){
			echo "ok";
		}
	}
}