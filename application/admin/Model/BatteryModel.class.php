<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class BatteryModel extends Model{
	public function getSF($Model){
		$pro=$Model->select();
		return $pro;
	}


	public function getDelt($Model,$id){
		$pro=$Model->where("iid=".$id)->delete();
		return $pro;
	}

	public function getFindS($Model,$id){
		$pro=$Model->where("iid=".$id)->find();
		return $pro;
	}

	public function getUpdateS($Model,$data,$id){
		$pro=$Model->where("iid=".$id)->save($data);
		return $pro;
	}

	public function getInsert($Model,$data){
		$pro=$Model->add($data);
		return $pro;
	}	
}