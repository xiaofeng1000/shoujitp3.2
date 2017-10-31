<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;

class HelpModel extends Model{
	public function getSelect($Model){
		$pro=$Model->select();
		return $pro;
	}
}