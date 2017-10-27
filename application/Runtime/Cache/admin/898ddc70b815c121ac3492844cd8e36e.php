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
    		<li><a href="#">添加手机型号</a></li>
    	</ul>
	</div>

	<form>
		<label>要添加的手机型号</label><input type="text" id="tet"><br/>
		<label>请选择手机品牌</label>
		<select id="cell">
			<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="{v.id}" "><?php echo ($v["brands"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select><br/>
		<button type="button" id="add">确认添加</button>
	</form>
</body>
<script>
$('#add').click(function(){
	var brand=$('#cell').find('option:selected').html();
	var Model_number =$('#tet').val();
	$.ajax({
		type:'POST',
		url:'/shouji/admin.php/Phone/insert',
		data:{
			brand:brand,
			Model_number:Model_number,
		},
		success:function(data){
			if(data){
				window.location="/shouji/admin.php/Phone/index"
			}
		}
	});
});
</script>
</html>