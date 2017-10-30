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

	<div class="mainindex">
		<table class="tablelist">
			<tr>
				<th>型号</th>
				<th>颜色</th>
				<th>内屏异常</th>
				<th>外屏碎(内屏正常)</th>
				<th>操作</th>
			</tr>
			
			<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($v["model_number"]); ?></td>
				<td><?php echo ($v["color"]); ?></td>
				<td><?php echo ($v["price1"]); ?></td>
				<td><?php echo ($v["price2"]); ?></td>
				<td>
					<input type="button" value="修改" onclick="updateBbs(<?php echo ($v["sid"]); ?>)">
					<input type="button" value="删除" onclick="Delete(<?php echo ($v["sid"]); ?>)">
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<button type="button" class='Insert'>添加新型号信息</button>
	</div>
</body>
<script>
$('.Insert').click(function(){
	window.location="/shouji/admin.php/Screen/add"
});
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

function Delete(sid){
    if(confirm("是否删除该记录？")){
        window.location = "/shouji/admin.php/Screen/delete/id/"+sid;
    }
}

function updateBbs(sid){
    if(confirm("是否修改该记录？")){
        window.location = "/shouji/admin.php/Screen/find/id/"+sid;
    }          
}
</script>
</html>