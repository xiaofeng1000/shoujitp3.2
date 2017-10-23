<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;

class RamModel extends Model{
	public function getShowIndex($Model){
		$obj=$Model->select();
		return $obj;
	}

	public function getAdd($Model,$data){
		$pro=$Model->add($data);
		return $pro;
	}
}