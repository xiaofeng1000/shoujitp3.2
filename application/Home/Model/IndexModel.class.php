<?php
namespace Home\Model;
use Think\Controller;
use Think\Model;

class IndexModel extends Model{
	public function getShowIndex($Model,$id){
		if($id!=0){
			$brands=$pro->where("id=".$id)->select();
    	 	$br=$brands[0]['brands'];
    	 	$arr1=$Model->where("brands="."'$br'")->limit(0,8)->select();
    	 	$arr=$Model->select();
    	 	return $arr;
    	 	return $arr1;
		}else{
			$arr1=$Model->where()->limit(0,8)->select();
			$arr=$Model->select();
			return $arr1;
			return $arr;
		}
	}
}