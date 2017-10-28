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
    		<li><a href="#">添加手机型号</a></li>
    	</ul>
	</div>

	<form>
		<label>要添加的手机型号</label><input type="text" id="tet"><br/>
		<label>请选择手机品牌</label>
		<select id="cell">
			<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="{v.id}" "><?php echo ($v["brands"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select><br/>
		<label>手机/平板</label>
		<select class="select2" name='type'>
			<option>手机</option>
			<option>平板</option>
		</select><br/>
		<button type="button" id="add">确认添加</button>
	</form>
</body>
<script>
$('#add').click(function(){
	var brand=$('#cell').find('option:selected').html();
	var Model_number =$('#tet').val();
	var type=$('.select2').find('option:selected').html();
	$.ajax({
		type:'POST',
		url:'/shouji/admin.php/Phone/insert',
		data:{
			brand:brand,
			Model_number:Model_number,
			ty:type,
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