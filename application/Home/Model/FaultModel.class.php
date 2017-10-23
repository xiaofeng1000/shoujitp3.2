<?php
namespace Home\Model;
use Think\Controller;
use Think\Model;

class FaultModel extends Model{
	public function getShowIndex($Model,$bid){
		if($bid){
			$pro=$Model->where("bid=".$bid)->find();
			return $pro;
		}else{
			$arr1=$Model->select();
			return $arr1;
		}
	}

	public function getAdd($Model,$data){
		$pro=$Model->add($data);
		return $pro;
	}
}