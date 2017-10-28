<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class RamModel extends Model{
	public function getSelect($Model){
		$pro=$Model->select();
		return $pro;
	}

	public function getDelete($Model,$id){
		$pro=$Model->where("id=".$id)->delete();
		return $pro;
	}

	public function getFind($Model,$id){
		$pro=$Model->where("id=".$id)->find();
		return $pro;
	}

	public function getUpdateShow($Model,$data,$id){
		$pro=$Model->where("id=".$id)->save($data);
		return $pro;
	}

	public function getAdd($Model,$data){
		$pro=$Model->add($data);
		return $pro;
	}
}