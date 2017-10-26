<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>无标题文档</title>
	<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/admin/js/jquery.js"></script>
</head>

<body>
	﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/shouji/Public/admin/js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="/shouji/Public/admin/images/leftico01.png" /></span>管理订单
    </div>
    	<ul class="menuson">
        <li class="active"><cite></cite><a href="/shouji/admin.php/Index/index.html" target="rightFrame">订单列表</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Accept/index" target="rightFrame">已受理订单</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Accepted/index" target="rightFrame">正在受理订单</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Spoilage/index" target="rightFrame">受理修理损坏</a><i></i></li>
        <li><cite></cite><a href="imglist1.html" target="rightFrame">自定义</a><i></i></li>
        <li><cite></cite><a href="tools.html" target="rightFrame">常用工具</a><i></i></li>
        <li><cite></cite><a href="filelist.html" target="rightFrame">信息管理</a><i></i></li>
        <li><cite></cite><a href="tab.html" target="rightFrame">Tab页</a><i></i></li>
        </ul>    
    </dd>
        
    
    <dd>
    <div class="title">
    <span><img src="/shouji/Public/admin/images/leftico02.png" /></span>品牌管理
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="/shouji/admin.php/Modif/index">修改品牌</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Phone/index">手机型号</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Brand/index">手机品牌</a><i></i></li>
        </ul>     
    </dd>   
    </dl>
</body>
</html>

	<div class="place">
		<span>位置：</span>
		<ul class="placeul">
    		<li><a href="#">手机型号</a></li>
    	</ul>
	</div>

	<div class="mainindex">
		<h1>当前负责维修的手机型号：</h1>
		<table class="table">
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
		<button type="button">添加手机型号</button>
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
</script>
</html>