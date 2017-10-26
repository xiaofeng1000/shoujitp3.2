<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class PhoneModel extends Model{
	public function getSI($Model){
		$pro=$Model->select();
		return $pro;
	}
}

