<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class ModifModel extends Model{
	public function getIS($Model){
		$pro=$Model->select();
		return $pro;
	}

	public function getAS($Model,$data){
		$pro=$Model->add($data);
		return $pro;
	}

	public function getDS($Model,$id){
		$pro=$Model->where("id=".$id)->delete();
		return $pro;
	}
}