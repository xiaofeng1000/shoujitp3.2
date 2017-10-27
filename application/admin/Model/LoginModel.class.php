<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class LoginModel extends Model{
	public function getLF($Model,$data){
		$obj=$Model->where($data)->find();
		return $obj;
	}
}