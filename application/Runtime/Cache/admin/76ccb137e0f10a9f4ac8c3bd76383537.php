<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>无标题文档</title>
	<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/admin/js/jquery.js"></script>
</head>

<body>
	<div class="place">
    	<span>位置：</span>
    	<ul class="placeul">
    		<li><a href="#">首页</a></li>
    		<li><a href="#">受理修理损坏</a></li>
    	</ul>
    </div>

    <div class="rightinfo">
    	<h1>修改修理原因</h1>
    	<form action="/shouji/admin.php/Spoilage/update/"} method="POST" >
			<label>原因</label><input type="text" value="<?php echo ($pro["tabulation"]); ?>" class="tabul" name='tabul'><br/>
			<label>具体原因1</label><input type="text" value="<?php echo ($pro["question1"]); ?>" class="ques1" name='ques1'><br/>
			<label>修理价格1</label><input type="text" value="<?php echo ($pro["The_price1"]); ?>" class="price1" name='price1'><br/>
			<label>具体原因2</label><input type="text" value="<?php echo ($pro["question2"]); ?>" class="ques2" name='ques2'><br/>
			<label>修理价格2</label><input type="text" value="<?php echo ($pro["The_price1"]); ?>" class="price2" name='price2'><br/>
			<input type="hidden" value='<?php echo ($pro["id"]); ?>' name='id'>
			<button id="bon" type="submit" >保存</button>
    	</form>
    </div>
</body>
<script>

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