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
    		<li><a href="#">更换手机电池</a></li>
    	</ul>
	</div>
	
	<div class="mainindex">
		<table class="tablelist">
			<tr>
				<th>手机型号</th>
				<th>更换电池价格</th>
				<th>操作</th>
			</tr>

			<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($v["model_number"]); ?></td>
				<td><?php echo ($v["val"]); ?></td>
				<td>
					<input type="button" value="修改" onclick="updateBbs(<?php echo ($v["iid"]); ?>)">
					<input type="button" value="删除" onclick="Delete(<?php echo ($v["iid"]); ?>)">
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<button type="button" id="Addprice">添加型号和价格</button>
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

function Delete(iid){
    if(confirm("是否删除该记录？")){
        window.location = "/shouji/admin.php/Battery/delete/id/"+iid;
    }
}

function updateBbs(iid){
    if(confirm("是否修改该记录？")){
        window.location = "/shouji/admin.php/Battery/find/id/"+iid;
    }          
}

$('#Addprice').click(function(){
	window.location = "/shouji/admin.php/Battery/add";
})
</script>
</html>