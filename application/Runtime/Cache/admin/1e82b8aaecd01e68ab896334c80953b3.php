<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>无标题文档</title>
	<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/admin/js/jquery.js"></script>
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
    		<li><a href="#">修改手机品牌</a></li>
    	</ul>
	</div>

	<div class="mainindex">
		<label>要修改的手机品牌</label><input type='text' value='<?php echo ($pro["brands"]); ?>' class="brandtext"><br/>
		<button type="button" id="upda">确认修改手机品牌</button>
	</div>
</body>
<script>
$('#upda').click(function(){
	var brand = $('.brandtext').val();
	var str=window.location.href;
	str=str.substr(str.indexOf("id")+3);
	console.log(brand);
	$.ajax({
		type:'POST',
		url:'/shouji/admin.php/Modif/update',
		data:{
			id:str,
			brand:brand,
		},
		success:function(data){
			if(data){
				window.location="/shouji/admin.php/brand/index";
			}
		}
	});
});
</script>
</html>