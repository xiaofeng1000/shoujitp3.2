<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class AcceptModel extends Model{
	public function getSS($Model){
		$obj=$Model->where('accept=1')->select();
		return $obj;
	}
}
