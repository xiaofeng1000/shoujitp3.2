<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>手机网站</title>
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
</head>
<body>
	<div class="phoneType-big">
		<div class="phoneType-head"><a href="">首页</a>选择机型</div>
	
		<div class="phoneType-seek">
			<input type="text" name="Search" placeholder="输入要维修的手机型号">
		</div>
		<section class="m-brand">
				<ul class="clearfix">
					<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="" class="brand-select"><?php echo ($v["brands"]); ?></a></li>
						<!-- <li><a href="">三星</a></li>
						<li><a href="">小米</a></li>
						<li><a href="">华为</a></li>
						<li><a href="">魅族</a></li>
						<li><a href="">vivo</a></li>
						<li><a href="">oppo</a></li> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
		</section>
		<section class="m-model phoneType-model">
				<h2>iphone</h2>
				<ul class="clearfix">
					<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/shouji/index.php/fault/index"><?php echo ($v["Model_number"]); ?></a></li>
						<!-- <li><a href="fault.html">iPhone 7</a></li>
						<li><a href="fault.html">iPhone SE</a></li>
						<li><a href="">iPhone 6s Plus</a></li>
						<li><a href="">iPhone 6s</a></li>
						<li><a href="">iPhone 6 Plus</a></li>
						<li><a href="">iPhone 6</a></li>
						<li><a href="">iPhone 5s</a></li> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<h2>ipad</h2>
				<ul class="clearfix">
					<?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/shouji/index.php/fault/index"><?php echo ($v["Model_number"]); ?></a></li>
						<!-- <li><a href="">iPhone 7</a></li>
						<li><a href="">iPhone SE</a></li>
						<li><a href="">iPhone 6s Plus</a></li>
						<li><a href="">iPhone 6s</a></li>
						<li><a href="">iPhone 6 Plus</a></li>
						<li><a href="">iPhone 6</a></li>
						<li><a href="">iPhone 5s</a></li> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
		</section>
	</div>
</body>
<script>
$(".phoneType-seek>input").change(function(){
	var Search=$('.phoneType-seek>input').val();
	console.log('Search');
	$.ajax({
		type:'POST',
		url:'/shouji/index.php/Phonetype/find',
		data:{
			Search:Search,
		},
		success:function(){

		}
	});
});
</script>
</html>