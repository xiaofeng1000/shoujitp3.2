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
<div style="background:url(/shouji/Public/admin/images/topbg.gif) repeat-x;">
    <div class="topleft">
        <a href="main.html" target="_parent"><img src="/shouji/Public/Home/images/logo.png" title="系统首页" /></a>

        <div class="topright">
        <ul>
            <li><a href="#">帮助</a></li>
            <li><a href="#">关于</a></li>
            <li><a href="/shouji/admin.php/login/index" target="_parent">退出</a></li>
        </ul>

        <div class="user">
            欢迎<span><?php
 if($user){ echo $user; }else{ echo "请<a href='/shouji/admin.php/login/index'>登录</a>"; } ?></span>用户
            <!-- <i>消息</i>
            <b>5</b> -->
        </div>
    </div>
    </div>
    
    
</div>
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
        <li><cite></cite><a href="/shouji/admin.php/Ram/index" target="rightFrame">升级手机内存</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Battery/index" target="rightFrame">更换手机电池</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Screen/index" target="rightFrame">屏幕修理</a><i></i></li>
        <li><cite></cite><a href="/shouji/admin.php/Shell/index" target="rightFrame">更换外壳</a><i></i></li> 
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
    <dd>
        <div class="title">
        <span><img src="/shouji/Public/admin/images/leftico02.png" /></span>分公司管理
        </div>
        <ul class="menuson">
            <li><cite></cite><a href="/shouji/admin.php/Filiale/index" target="rightFrame">分公司列表</a><i></i></li>
            </ul>     
    </dd> 
    <dd>
        <div class="title">
            <span><img src="/shouji/Public/admin/images/leftico02.png" /></span>关于我们
        </div>

        <ul class="menuson"> 
            <li><cite></cite><a href="/shouji/admin.php/About/index" target="rightFrame">关于我们</a><i></i></li>
            <li><cite></cite><a href="/shouji/admin.php/Contact/index" target="rightFrame">联系我们</a><i></i></li>
            <li><cite></cite><a href="/shouji/admin.php/Join/index" target="rightFrame">加入我们</a><i></i></li>
        </ul>
    </dd> 
    </dl>
    <div style="float: right; width: 90%;height: 500px">
    <iframe scrolling="auto" rameborder="0" src="" name="rightFrame" width="100%" height="100%"></iframe>
    </div>
</div>

</body>
</html>