<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <li><cite></cite><a href="form.html" target="rightFrame">添加编辑</a><i></i></li>
        <li><cite></cite><a href="imglist.html" target="rightFrame">图片列表</a><i></i></li>
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
        <li><cite></cite><a href="#">发布信息</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Brand/index">手机品牌</a><i></i></li>
        </ul>     
    </dd> 
    
    
    <dd><div class="title"><span><img src="/shouji/Public/admin/images/leftico03.png" /></span>编辑器</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>    
    </dd>  
    
    
    <dd><div class="title"><span><img src="/shouji/Public/admin/images/leftico04.png" /></span>日期管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>
    
    </dd>   
    
    </dl>
</body>
</html>

	<div class="place">
		<span>位置：</span>
		<ul class="placeul">
    		<li><a href="#">添加手机分类</a></li>
    	</ul>
	</div>

	<div class="mainindex">
		<table class="table ">
            <tr>
            	<th>品牌</th>
            	<th>是否删除</th>
            </tr>
            <?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                	<td><?php echo ($v["brands"]); ?></td>
                	<td><input type="button" value="删除" onclick="delBbs(<?php echo ($v["id"]); ?>)"></td>
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
</script>
</html>