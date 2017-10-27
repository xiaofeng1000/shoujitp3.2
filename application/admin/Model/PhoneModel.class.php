<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class PhoneModel extends Model{
	public function getSI($Model){
		$pro=$Model->select();
		return $pro;
	}

	public function getAS($Model){
		$pro=$Model->select();
		return $pro;
	}

	public function getIS($Model,$data){
		$obj=$Model->add($data);
		return $obj;
	}

	public function getDF($Model,$id){
		$pro=$Model->where("bid=".$id)->delete();
		return $pro;
	}

	public function getUF($Model,$id){
		if($id){
			$pro=$Model->where("bid=".$id)->find();
			return $pro;
		}else{
			$pro=$Model->select();
			return $pro;
		}	
	}

	public function getUS($Model,$id,$data){
		$pro=$Model->where("bid=".$id)->save($data);
		return $pro;
	}
}

