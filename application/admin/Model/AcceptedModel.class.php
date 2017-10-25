<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class AcceptedModel extends Model{
	public function getSeleteIndex($Model){
		$obj=$Model->where("accept>1")->select();
		return $obj;
	}

	public function getUpdate($Model,$id,$data){
		$pro=$Model->where("id=".$id)->save($data);
		return $pro;
	}
}