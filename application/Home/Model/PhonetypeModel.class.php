<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;

class PhonetypeModel extends Model{
	public function getSelectShow($Model,$brands){
	//显示品牌
	$pro=$Model->select();

	$arr=$Model->where("brands='苹果' and phone=1");
	$arr1=$Model->where("brands='苹果' and pad=1");

	return $pro;
	return $arr;
	return $arr1;
	}
}