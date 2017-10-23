<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;

class ScreenModel extends Model{
	public function getIndexShow($Model){
		$obj=$Model->select();
		return $obj;
	}
}