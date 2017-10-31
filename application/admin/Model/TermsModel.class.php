<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class TermsModel extends Model{
	public function getSF($Model){
		$pro=$Model->where("title='服务条款'")->find();
		return $pro;
	}

	public function getUpdate($Model,$id,$data){
		$pro=$Model->where("id=".$id)->save($data);
		return $pro;
	}
}