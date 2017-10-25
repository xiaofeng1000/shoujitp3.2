<?php
namespace Home\Controller;
use Think\Controller;

class EnquiriesController extends Controller{
	public function index(){
		$this->display();
	}

	public function orderinfo(){
		$news=D('Enquiries');
		$con=$_GET['Contach'];
		// echo $con;
		$Model=M('information');
		$obj=$news->getFind($Model,$con);
		// $Damage=explode(",",$.Damage_reason);
		// dump($Damage)

		for($i=0;$i<count($obj);$i++){
			if($obj[$i]['Damage_reason']){
				$Damage=explode(',',$obj[$i]['Damage_reason']);
				// dump($Damage);
				$this->assign('Damage',$Damage);
			}
		}
		$this->assign('obj',$obj);
		$this->display();
	}

	//生成验证码
	public function verify(){
  		$Verify = new\Think\Verify();
  		$Verify ->entry();
	}

	//验证码验证
	public function check_verify($code, $id = ''){
         $verify = new \Think\Verify();
         $res = $verify->check($code, $id);
         $this->ajaxReturn($res, 'json');
    }
}