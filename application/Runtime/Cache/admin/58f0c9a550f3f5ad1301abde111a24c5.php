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

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="/shouji/Public/admin/images/leftico01.png" /></span>管理订单
    </div>
    	<ul class="menuson">
        <li class="active"><cite></cite><a href="/shouji/admin.php/Index/index.html" target="rightFrame">订单列表</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Accept/index" target="rightFrame">已受理订单</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Accepted/index" target="rightFrame">正在受理订单</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Spoilage/index" target="rightFrame">受理修理损坏</a><i></i></li>
        <li><cite></cite><a href="imglist1.html" target="rightFrame">自定义</a><i></i></li>
        <li><cite></cite><a href="tools.html" target="rightFrame">常用工具</a><i></i></li>
        <li><cite></cite><a href="filelist.html" target="rightFrame">信息管理</a><i></i></li>
        <li><cite></cite><a href="tab.html" target="rightFrame">Tab页</a><i></i></li>
        </ul>    
    </dd>
        
    
    <dd>
    <div class="title">
    <span><img src="/shouji/Public/admin/images/leftico02.png" /></span>品牌管理
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="/shouji/admin.php/Modif/index">修改品牌</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Phone/index">手机型号</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Brand/index">手机品牌</a><i></i></li>
        </ul>     
    </dd>   
    </dl>
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
			<label>原因</label><input type="text" value="<?php echo ($pro["tabulation"]); ?>" class="tabul"><br/>
			<label>具体原因1</label><input type="text" value="<?php echo ($pro["question1"]); ?>" class="ques1"><br/>
			<label>修理价格1</label><input type="text" value="<?php echo ($pro["The_price1"]); ?>" class="price1"><br/>
			<label>具体原因2</label><input type="text" value="<?php echo ($pro["question2"]); ?>" class="ques2"><br/>
			<label>修理价格2</label><input type="text" value="<?php echo ($pro["The_price1"]); ?>" class="price2"><br/>
			<button id="bon" type="button">保存</button>
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
		type:{
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