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
    		<li><a href="#">修改升级手机内存</a></li>
    	</ul>
	</div>

	<div class="formbody">
		<div id="usual1" class="usual">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
    			<li><label>手机型号<b>*</b></label><input name="" type="text" class="dfinput" value=""  style="width:518px; height: 40px;"/></li>
   
    			<li><label>升级手机内存<b>*</b></label>  
    				<input name="" type="text" class="DRam" value=""  style="width:518px;height:40px; border:1px solid #A7B5BC" />
    			</li>
    			<li><label>&nbsp;</label><input name="" type="button" class="btn" value="添加升级手机内存"/></li>
    		</ul>
    	</div>
		</div>
	</div>
</body>
<script>
$('.btn').click(function(){
	var Mnumber= $('.dfinput').val();
	var MRam=$('.DRam').val();

	console.log(Mnumber);
	console.log(MRam);
	$.ajax({
		type:'POST',
		url:'/shouji/admin.php/Ram/insert',
		data:{
			number:Mnumber,
			Ram:MRam,

		},
		success:function(data){
			if(data=='ok'){
				alert('添加升级手机内存成功');
				window.location="/shouji/admin.php/Ram/index";
			}else if(data=='false'){
				alert('修改升级手机内存失败');
			}
		}
	});
});
</script>
</html>