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
    		<li><a href="#">修改更换手机电池型号或价格</a></li>
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
						<label>价格<b>*</b></label>  
    					<input name="" type="text" class="Dprice" value="<?php echo ($pro["val"]); ?>"  style="width:518px;height:40px; border:1px solid #A7B5BC" />
    				</li>
    				<li>
    					<label>&nbsp;</label>
    					<input name="" type="button" class="btn" value="修改升级手机内存"/>
    				</li>
				</ul>
			</div>
		</div>
	</div>
</body>
<script>
$('.btn').click(function(){
	var number=$('.dfinput').val();
	var price=$('.Dprice').val();
	var str=window.location.href;
	str=str.substr(str.indexOf("id")+3);
	console.log(number);
	console.log(price);
	$.ajax({
		type:'POST',
		url:"/shouji/admin.php/Battery/update",
		data:{
			number:number,
			price:price,
			id:str,
		},
		success:function(data){
			if(data=='ok'){
				window.location="/shouji/admin.php/Battery/index";
			}else if(data=='false'){
				alert('修改更换手机电池型号或价格失败');
			}
		}
	});
});
</script>
</html>