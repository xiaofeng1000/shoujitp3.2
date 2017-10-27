<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    		<li><a href="#">管理手机分类</a></li>
    	</ul>
	</div>

	<div class="mainindex">
		<table class="table ">
            <tr>
            	<th>品牌</th>
            	<th>操作</th>
            </tr>
            <?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                	<td><?php echo ($v["brands"]); ?></td>
                	<td>
                		<input type="button" value="删除" onclick="delBbs(<?php echo ($v["id"]); ?>)">
                		<input type="button" value="修改" onclick="Update(<?php echo ($v["id"]); ?>)">
                	</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
		<label>要添加的手机品牌</label><input type="text" id="txt">
		<button type="button" id="byt">添加</button>
	</div>

</body>
<script>
$('#byt').click(function(){
	var brand=$('#txt').val();
	if(brand==""){
		alert('请输入要添加的手机品牌');return false;
	}
	$.ajax({
		type:'POST',
		url:'/shouji/admin.php/Modif/insert',
		data:{
			brand:brand,
		},
		success:function(data){
			if(data){
				window.location.href='/shouji/admin.php/Brand/index';
			}
		}
	});
});
function delBbs(id){
    	  if(confirm("是否删除该记录？")){
    		  window.location = "/shouji/admin.php/Modif/delete/id/"+id;
    	  }
}

function Update(id){
	if(confirm("是否修改该记录")){
		window.location = "/shouji/admin.php/Modif/show/id/"+id;
	}
}
</script>
</html>