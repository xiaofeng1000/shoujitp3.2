<?php
namespace Home\Model;
use Think\Controller;
use Think\Model;

class AdoutModel extends Model{
	public function getSelect($Model){
		$pro=$Model->select();
		return $pro;
	}
}