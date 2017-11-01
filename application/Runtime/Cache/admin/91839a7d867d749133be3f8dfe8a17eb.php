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
    		<li><a href="#">更换外壳</a></li>
    	</ul>
	</div>
	<div class="formbody">
		<div id="usual1" class="usual">
			<div id="tab1" class="tabson">
				<ul class="forminfo">
				    <li>
				    	<label>型号<b>*</b></label>
				    	<input name="" type="text" class="dfinput" value=""  style="width:518px;"/>
				    </li>
			   
				    <li>
				    	<label>颜色<b>*</b></label>
				    	<input name="" type="text" class="DRam" value=""  style="width:518px;height:40px; border:1px solid #A7B5BC" /></li> 
				    </li>
				    <li>
				    	<label>价格<b>*</b></label>
				    	<input name="" type="text" class="DRam" value=""  style="width:518px;height:40px; border:1px solid #A7B5BC" /></li>   
				    </li>
			    
			    	<li>
						<label>添加图片<b>*</b></label>
						<input type="file" name="upfile" id="fileField" />
			    	</li>
			    <li><label>&nbsp;</label><input name="" type="button" class="btn" value="马上发布"/></li>
			    </ul>
			</div>
		</div>
	</div>
</body>
<script>
$('.btn').click(function(){
	var path=$('#fileField').val();
});
</script>
</html>