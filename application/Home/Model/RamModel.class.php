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

	public function getFind($Model,$id){
		$pro=$Model->where("id=".$id)->find();
		return $pro;
	}
}