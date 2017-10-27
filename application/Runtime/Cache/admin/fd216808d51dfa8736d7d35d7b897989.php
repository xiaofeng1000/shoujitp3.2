<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

</head>

<body>
	﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/shouji/Public/admin/js/jquery.js"></script>




</head>

<body style="background:#f0f9fd;">
    
    
</body>
</html>

	<div class="place">
    	<span>位置：</span>
    	<ul class="placeul">
    		<li><a href="#">首页</a></li>
    		<li><a href="#">受理修理损坏</a></li>
    	</ul>
    </div>

    <div class="rightinfo">
    	<h1>添加修理原因</h1>

    	<form>
			<label>原因</label><input type="text" value="" class="tabul"><br/>
			<label>具体原因1</label><input type="text" value="" class="ques1"><br/>
			<label>修理价格1</label><input type="text" value="" class="price1"><br/>
			<label>具体原因2</label><input type="text" value="" class="ques2"><br/>
			<label>修理价格2</label><input type="text" value="" class="price2"><br/>
			<button id="bon" type="button">添加修理范围</button>
    	</form>
    </div>
</body>
<script>
$('#bon').click(function(){
	var tabul =$('.tabul').val();
	var ques1 =$('.ques1').val();
	var price1 =$('.price1').val();
	var ques2 =$('.ques2').val();
	var price2 =$('.price2').val();
	
	$.ajax({
		type:'POST',
		url:'/shouji/admin.php/Spoilage/insert',
		data:{
			tabul:tabul,
			ques1:ques1,
			price1:price1,
			ques2:ques2,
			price2:price2,
		},
		success:function(data){
			if(data){
				window.location = "/shouji/admin.php/Spoilage/index";
			}
		}
	});
});
</script>
<script language="javascript">
$(function(){	
	//导航切换
	$(".imglist li").click(function(){
		$(".imglist li.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
});	

$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>
</html>