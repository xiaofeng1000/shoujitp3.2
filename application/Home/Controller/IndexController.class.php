<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$id=$_GET['id'];
        // dump($id);
        $news=D('Index');
    	// 实例化表
    	$pro=M("shouji");
    	$Model=M("Model_number");

        // $news = D('Index');
        // $arr=$news->getShowIndex($pro);
        // $arr1=$news->getShowIndex($Model,$id);

        // if($id!=0){
        //     $arr1=$news->getFL($pro,$Model,$id);
        // }else{
        //     $arr1=$news->getFL($Model);
        // }
    	if($id!=0){
    		$brands=$pro->where("id=".$id)->select();
    		$br=$brands[0]['brands'];
    		$arr1=$Model->where("brands="."'$br'")->limit(0,8)->select();
    		// echo $Model->getLastSql();
    	}else{
    		$arr1=$Model->where()->limit(0,8)->select();
    	}
    	//遍历表
    	$arr=$pro->select();
    	$this->assign('arr1',$arr1);
    	$this->assign('arr',$arr);
        $this->show();
    }
}