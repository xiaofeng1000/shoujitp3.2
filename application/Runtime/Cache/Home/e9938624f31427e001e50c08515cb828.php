<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>订单详情</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=yes"/>
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<link rel="stylesheet" type="text/css" href="/shouji/Public/Home/css/main.css">
	<link href="/shouji/Public/Home/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/shouji/Public/Home/css/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script src="/shouji/Public/Home/js/js-image-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/main.js"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/order.js"></script>               
</head>
<body>
	<div class="fault-big">
		<div class="fault-head"><a href="/shouji/index.php/Index/index">首页</a>我的订单</div>
	<div class="orderinfo-box">
		<?php if(empty($obj)): ?><h4>此手机号没有订单</h4>

		<?php else: ?> 
			<?php if(is_array($obj)): $i = 0; $__LIST__ = $obj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="clearfix">
					<div class="orderinfo-time">
						<p>订单编号：<?php echo ($v["id"]); ?></p>
						<p>下单时间：<?php echo (date('Y-m-d',$v["time"])); ?></p>
					</div>	
					<span class="orderinfo-button">已下单</span>
				</div>

				<div class="clearfix orderinfo-info-box">
					<div class="orderinfo-info">
						<img src="/shouji/Public/Home/<?php echo ($v["image"]); ?>">			
					</div>
					<div class="orderinfo-mes">
						<p><?php echo ($v["Model_number"]); ?></p>
						<p><?php echo ($v["Damage_reason"]); ?></p>
					</div>
					<div class="orderinfo-price">
						<span>￥</span><b><?php echo ($v["total_cost"]); ?></b>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
		<!-- <div class="orderinfo-box">
			<div class="clearfix">
				<div class="orderinfo-time">
					<p>订单编号：SGDJ10092112</p>
					<p>下单时间：2017-09-01</p>
				</div>
				
				<span class="orderinfo-button">已下单</span>
			</div>
			<div class="clearfix orderinfo-info-box">
				<div class="orderinfo-info">
					<img src="/shouji/Public/Home/images/iPhone7.png">			
				</div>
				<div class="orderinfo-mes">
					<p>iphone 7</p>
					<p>内屏显示异常</p>
				</div>
				<div class="orderinfo-price">
					<span>￥</span><b>899</b>
				</div>
			</div>
		</div> -->
		
		<p class="link">联系客服</p>
	</div>	
</body>
</html>