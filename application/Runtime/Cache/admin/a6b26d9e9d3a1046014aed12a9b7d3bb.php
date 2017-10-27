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
    		<li><a href="#">手机型号</a></li>
    	</ul>
	</div>

	<div class="mainindex">
		<h1>当前负责维修的手机型号：</h1>
		<table class="tablelist">
			<tr>
				<th>型号</th>
				<th>所属品牌</th>
				<th>操作</th>
			</tr>
			
			<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($v["Model_number"]); ?></td>
				<td><?php echo ($v["brands"]); ?></td>
				<td>
					<input type="button" value="修改" onclick="updateBbs(<?php echo ($v["bid"]); ?>)">
                    <input type="button" value="删除" onclick="delBbs(<?php echo ($v["bid"]); ?>)">
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<button type="button" id="phadd">添加手机型号</button>
	</div>
</body>

<script>
function delBbs(id){
	if(confirm("是否删除该记录？")){
              window.location = "/shouji/admin.php/Phone/delete/id/"+id;
          }
    }

function updateBbs(id){
    if(confirm("是否修改该记录？")){
              window.location = "/shouji/admin.php/Phone/find/id/"+id;
    }
}

$('#phadd').click(function(){
	window.location = "/shouji/admin.php/Phone/add";
});
</script>
</html>