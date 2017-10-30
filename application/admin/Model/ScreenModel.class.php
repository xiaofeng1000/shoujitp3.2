<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class ScreenModel extends Model{
	public function getSS($Model){
		$pro=$Model->select();
		return $pro;
	}

	public function getInsertS($Model,$data){
		$pro=$Model->add($data);
		return $pro;
	} 

	public function getFindS($model,$id){
		$pro=$model->where("sid=".$id)->find();
		return $pro;
	}

	public function getUpdateS($Model,$id,$data){
		$pro=$Model->where("sid=".$id)->save($data);
		return $pro;
	}

	public function getDeleteS($model,$id){
		$pro=$model->where("sid=".$id)->delete();
		return $pro;
	}
}