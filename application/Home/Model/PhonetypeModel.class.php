<?php
namespace Home\Model;
use Think\Model;
use Think\Controller;

class PhonetypeModel extends Model{


	/**
	 * 功能：查询全部表数据
	 * 参数：表
	 */
	public function getSelectShow($Model){
		//显示品牌e
		$arr=$Model->select();
		return $arr;
	}
	/**
	 * 功能：对苹果品牌的操作
	 * 参数：表,条件值
	 */
	public function getSelectShowIphone($Model,$brands){
		if ($brands == 'phone') {
			$arr=$Model->where("brands='苹果' and ".$brands."=1")->select();
		}else if($brands == 'pad'){
			$arr=$Model->where("brands='苹果' and ".$brands."=1")->select();
		}
		return $arr;

	}

	// 查找要维修的手机号
	public function getFind($model,$Search){
		$fi=$model->where("Model_number="."'$Search'")->find();
		return $fi;
	}
}