<?php
namespace admin\Model;
use Think\Model;
use Think\Controller;

class ModifModel extends Model{
	//显示全表数据
	public function getIS($Model){
		$pro=$Model->select();
		return $pro;
	}
	// 添加数据
	public function getAS($Model,$data){
		$pro=$Model->add($data);
		return $pro;
	}
	// 删除该条数据
	public function getDS($Model,$id){
		$pro=$Model->where("id=".$id)->delete();
		return $pro;
	}
	// 获取要修改的数据
	public function getFS($Model,$id){
		$pro=$Model->where("id=".$id)->find();
		return $pro;
	}
	//修改数据
	public function getUS($Model,$id,$data){
		$pro=$Model->where("id=".$id)->save($data);
		return $pro;
	}
}