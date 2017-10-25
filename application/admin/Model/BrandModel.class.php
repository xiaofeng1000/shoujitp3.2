<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class BrandModel extends Model{
	public function getBrand($Model){
		$obj= $Model->select();
		return $obj;
	}
}