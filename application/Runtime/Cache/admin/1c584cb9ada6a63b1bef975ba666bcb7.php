<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/shouji/Public/admin/js/jquery.js"></script>
</head>
<body>
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
<div style="width: 100%;">
    <dl class="leftmenu" style="width:10%;">    
    <dd>
    <div class="title">
    <span><img src="/shouji/Public/admin/images/leftico01.png" /></span>管理订单
    </div>
        <ul class="menuson">
        <li><cite></cite><a href="/shouji/admin.php/List/index.html" target="rightFrame">订单列表</a><i></i></li>
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
        <li><cite></cite><a href="/shouji/admin.php/Modif/index" target="rightFrame">修改品牌</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Phone/index" target="rightFrame">手机型号</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Brand/index" target="rightFrame">手机品牌</a><i></i></li>
        </ul>     
    </dd>   
    </dl>
    <div style="float: right; width: 90%;height: 500px">
    <iframe scrolling="auto" rameborder="0" src="" name="rightFrame" width="100%" height="100%"></iframe>
    </div>
</div>

	
</body>
</html>