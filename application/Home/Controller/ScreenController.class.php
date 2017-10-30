<?php
namespace Home\Controller;
use Think\Controller;

class ScreenController extends Controller{
	public function index(){
		$news=D('Screen');

		$Model=M('screen');

		$obj=$news->getIndexShow($Model);
		// $obj=$Model->select();

		// $arr=$Model->find();
		$price1=$obj[0]['price1'];
		$price2=$obj[0]['price2'];
		$color=explode("，",$obj[0]['color']);

		$this->assign('price1',$price1);
		$this->assign('price2',$price2);
		$this->assign('color',$color);
		$this->assign('obj',$obj);
		$this->display();
	}

	public function select(){
		$news=D('Screen');
		$id=$_POST['id'];
		$Model=M('screen');
		// $pro=$Model->where("sid=".$id)->find();
		$pro=$news->getFind($Model,$id);
		// echo $Model->getLastSql();
		$price1=$pro['price1'];
		$price2=$pro['price2'];
		$price=array($price1,$price2);
		// dump($price);
		$color=explode("，",$pro['color']);
		// echo $Model->getLastSql();
		if($color){
			$color1=json_encode($color);
			// $pri=json_encode($price);
			// dump($color);
			echo $color1;
			// dump($color1);
		}
	}


}