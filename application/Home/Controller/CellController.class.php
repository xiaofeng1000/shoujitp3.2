<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\CellModel;

class CellController extends Controller{
	public function index(){
		//调用模型
		$news= D('Cell');
		$Model=M('battery');

		$pro=$news->getBatteryByWhere($Model);
		// dump($pro);
		

		// $pro=$Model->select();

		$this->assign('pro',$pro);
		$this->display();
	}

	public function insert(){
		$news = D('Cell');

		$model_number=$_POST['model_number'];
		$Damage_reason=$_POST['Damage_reason'];
		$user=$_POST['user'];
		$Contact=$_POST['Contact'];
		$path=$_POST['path1'];
		$Service=$_POST['Service'];
		$price=$_POST['price'];

		$Model=M('information');


		$data=array("Model_number"=>$model_number,"Damage_reason"=>$Damage_reason,"user"=>$user,"Contact"=>$Contact,"path"=>$path,"Service"=>$Service,"total_cost"=>$price,"time"=>time());

		// $obj=$Model->add($data);
		$obj=$news->getInformationByAdd($Model,$data);

		if($obj){
			echo "ok";
		}
	}
}