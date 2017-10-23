<?php
namespace Home\Model;
use Think\Controller;
use Think\Model;

class CellModel extends Model{
	public function getBatteryByWhere($Model){
		$pro=$Model->select();
		return $pro;
	}

	public function  getInformationByAdd($Model,$data){
		$obj=$Model->add($data);
		return $obj;
	}
}