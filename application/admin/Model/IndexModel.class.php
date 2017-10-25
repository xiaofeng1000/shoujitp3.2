<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class IndexModel extends Model{
	public function getSI($Model){
		$obj=$Model->select();
		return $obj;
	}
}