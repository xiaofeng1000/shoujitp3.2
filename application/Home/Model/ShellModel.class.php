<?php
namespace Home\Model;
use Think\Model;
use Think\Conroller;

class ShellModel extends Model{
	public function getShowIndex($Model){
		$pro=$Model->group('number')->Select();
		return $pro;
	}

	public function getColor($Model,$number){
		$pro=$Model->where("number='$number'")->select();
		return $pro;
	}

	public function getPath($Model,$data){
		$pro=$Model->where($data)->find();
		return $pro;
	}

	public function getFind($model,$id){
		$pro=$model->where("id=$id")->find();
		return $pro;
	}

	public function getAdd($model,$data){
		$pro=$model->add($data);
		return $pro;
	}


}