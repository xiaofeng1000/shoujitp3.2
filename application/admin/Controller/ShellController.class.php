<?php
namespace admin\Controller;
use Think\Controller;

class ShellController extends AdminController{
	public function index(){
		$news=D('Shell');
		$Model=M('shell');
		$pro=$news->getSelect($Model);

		$this->assign('pro',$pro);
		$this->display();
	}

	public function add(){
		$this->display();
	}

	public function insert(){
		$number=$_POST['number'];
		$color=$_POST['color'];
		$price=$_POST['price'];

		$upload = new Upload();//实例化上传类
		$upload->maxSize = 2000000;//控制上传文件大小(以字节为单)
		$upload->exts = array("jpg","gif","png","jpeg");//允许上传的扩展名
		$upload->autoSub = true;//是否生成子目录
		$upload->rootPath = "./";//上传文件保存路径的根目录
		$upload->savePath = "public/upfile/";//保存路径
		$result = $upload->uploadOne($_FILES["myFile"]);//上传文件
	}
}