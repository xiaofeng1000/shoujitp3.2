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
    		<li><a href="#">屏幕修理</a></li>
    	</ul>
	</div>

	<div class="formbody">
		<div id="usual1" class="usual">
			<div id="tab1" class="tabson">
				<ul class="forminfo">
					<li>
						<label>手机型号<b>*</b></label>
						<input name="" type="text" class="dfinput" value="<?php echo ($pro["model_number"]); ?>"  style="width:518px; height: 40px;"/>
					</li>
					<li>
						<label>颜色<b>*</b></label>  
    					<input name="" type="text" class="color" value="<?php echo ($pro["color"]); ?>"  style="width:518px;height:40px; border:1px solid #A7B5BC" />
    				</li>
    				<li>
						<label>内屏异常<b>*</b></label>  
    					<input name="" type="text" class="price1" value="<?php echo ($pro["price1"]); ?>"  style="width:518px;height:40px; border:1px solid #A7B5BC" />
    				</li>
    				<li>
						<label>外屏碎(内屏正常)<b>*</b></label>  
    					<input name="" type="text" class="price2" value="<?php echo ($pro["price2"]); ?>"  style="width:518px;height:40px; border:1px solid #A7B5BC" />
    				</li>
    				<li>
    					<label>&nbsp;</label>
    					<input name="" type="button" class="btn" value="添加升级手机内存"/>
    				</li>
				</ul>
			</div>
		</div>
	</div>
</body>
<script>
$('.btn').click(function(){
	var str=window.location.href;
	str=str.substr(str.indexOf("id")+3);
	var number=$('.dfinput').val();
	var color = $('.color').val();
	var price1 = $('.price1').val();
	var price2 = $('.price2').val();

	$.ajax({
		type:'POST',
		url:"/shouji/admin.php/Screen/update",
		data:{
			id:str,
			number:number,
			color:color,
			price1:price1,
			price2:price2
		},
		success:function(data){
			if(data=='ok'){
				alert('修改成功！');
				window.location="/shouji/admin.php/Screen/index";
			}else if(data=='false'){
				alert('修改失败！');
			}
		}
	});
});
</script>
</html>