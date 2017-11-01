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

	<div class="mainindex">
		<table class="tablelist">
			<tr>
				<th>型号</th>
				<th>颜色</th>
				<th>价格</th>
				<th>图片</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["number"]); ?></td>
					<td><?php echo ($v["color"]); ?></td>
					<td><?php echo ($v["price"]); ?></td>
					<td><img scr='/shouji/Public/Home/<?php echo ($v["path"]); ?>'></td>
					<td>
					<input type="button" value="修改" onclick="updateBbs(<?php echo ($v["id"]); ?>)">
					<input type="button" value="删除" onclick="Delete(<?php echo ($v["id"]); ?>)">
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<button type="button" id="Inadd">添加外壳颜色和价格</button>
	</div>
</body>
<script>
$('#Inadd').click(function(){
	window.location="/shouji/admin.php/Shell/add";
});
</script>
</html>