<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;

class PhonetypeModel extends Model{
	public function getSelectShow($Model,$brands){
	//显示品牌
	$pro=$Model->select();

	//显示类型
	// if ($brands == 'phone') {
	// 	$arr=$Model->where("brands='苹果' and ".$brands."=1");
	// }else if($brands == 'pad'){
	// 	$arr=$Model->where("brands='苹果' and ".$brands."=1");
	// }
	
	$arr1=$Model->where("brands='苹果' and pad=1");
	$arr=$Model->where("brands='苹果' and phone=1");
	

	// dump($Model);
	// dump($arr);
	return $arr;
	return $arr1;
	return $pro;

	}
}