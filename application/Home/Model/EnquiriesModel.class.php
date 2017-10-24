<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;

class EnquiriesModel extends Model{
	public function getFind($Model,$Contach){
		$obj=$Model->where("Contact=".$Contach)->select();
		return $obj;
	}
}