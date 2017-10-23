<?php
namespace Home\Model;
use Think\Model;
use Think\Conroller;

class ShellModel extends Model{
	public function getShowIndex($Model){
		$pro=$Model->Select();
		return $pro;
	}

	public function getFind($model,$id){
		$pro=$model->where("sid=$id")->find();
		return $pro;
	}

	public function getAdd($model,$data){
		$pro=$model->add($data);
		return $pro;
	}
}