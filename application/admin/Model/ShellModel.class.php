<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class ShellModel extends Model{
	public function getSelect($Model){
		$pro=$Model->select();
		return $pro;
	}
}