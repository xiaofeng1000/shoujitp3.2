<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class SpoilageModel extends Model{
	public function getAll($Model){
		$obj=$Model->select();
		return $obj;
	}

	public function getDelete($Model,$id){
		$obj=$Model->where("id=".$id)->delete();
		return $obj;
	}
}