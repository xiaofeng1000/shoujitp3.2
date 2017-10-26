<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/shouji/Public/admin/js/jquery.js"></script>
<script language="javascript">
$(function(){	
	//导航切换
	$(".imglist li").click(function(){
		$(".imglist li.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>
<script type="text/javascript">
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
</script>
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
    <li><a href="#">首页</a></li>
    <li><a href="#">已受理订单</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">   
        <h1 align="content">已受理订单列表</h1>
        <br/>
        <table class="table">   
        <tr>
            <th>手机图片</th>
            <th>手机型号</th>
            <th>颜色</th>
            <th>损坏情况</th>
            <th>用户姓名</th>
            <th>联系方式</th>
            <th>联系地址</th>
            <th>服务说明</th>
            <th>修理价格</th>
            <th>下单时间</th>
            <th>是否受理</th>
        </tr>

        <?php if(is_array($obj)): $i = 0; $__LIST__ = $obj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($v["image"]); ?></td>
                <td><?php echo ($v["Model_number"]); ?></td>
                <td><?php echo ($v["color"]); ?></td>
                <td><?php echo ($v["Damage_reason"]); ?></td>
                <td><?php echo ($v["user"]); ?></td>
                <td><?php echo ($v["Contact"]); ?></td>
                <td><?php echo ($v["path"]); ?></td>
                <td><?php echo ($v["Service"]); ?></td>
                <td><?php echo ($v["total_cost"]); ?></td>
                <td><?php echo (date('Y-m-d',$v["time"])); ?></td>
                <?php if(empty($v["accept"])): else: ?>
                    <td>订单已受理</td><?php endif; ?>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table> 
    </div>  
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
	</script>
</body>
</html>