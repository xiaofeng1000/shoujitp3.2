<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class ProcessModel extends Model{
	public function getSF($Model){
		$pro=$Model->where("title='服务流程'")->find();
		return $pro;
	}

	public function getUpdate($Model,$id,$data){
		$pro=$Model->where("id=".$id)->save($data);
		return $pro;
	}
}