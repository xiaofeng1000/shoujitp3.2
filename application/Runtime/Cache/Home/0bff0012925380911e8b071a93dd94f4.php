<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html id="order">
<head>
	<title>查询订单</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=yes"/>
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<link rel="stylesheet" type="text/css" href="/shouji/Public/Home/css/main.css">
	<link href="/shouji/Public/Home/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/shouji/Public/Home/css/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/order.js"></script> 
</head>
<body id="order-body">
	<div class="order-title">
		<img src="/shouji/Public/Home/images/logo.png">
		<p>让每一个手机的主人不再烦恼</p>	
	</div>
	<div class="order-box">
		<div class="order-m">
			<input type="text" name="" placeholder="请输入您的手机号" id="tel">
		</div>
		<div class="order-m">
			<input type="text" name="" placeholder="输入图片验证码" id="verify_img">
			<img src="/shouji/index.php/Enquiries/verify" onclick="this.src=this.src+'?'+Math.random()" >
		</div>
		<!-- <div class="order-m">
			<input type="text" name="">
			<span>获取验证码</span>
		</div> -->
		<button class="order-submit">查询订单</button>
	</div>
</body>
<script>
$("#verify_img").click(function() {
   var verifyURL = "/shouji/index.php/Enquiries/verify";
   var time = new Date().getTime();
   $("#verify_img").attr({
      "src" : verifyURL + "/" + time
   });
});

// $("#verify_img").keyup(function() {
//     $.post("/shouji/application/Home/public/check_verify", {
//         code : $("#verify_img").val()
//         }, function(data) {
//         if (data == true) {
//             //验证码输入正确
            
//         } else {
//             //验证码输入错误
            
//         }
//     });
// });

$('.order-submit').click(function(){
	var Contach = $('#tel').val();
	var validation = $('#verify_img').val();
	console.log(Contach);
	console.log(validation);
	
	if(Contach == ''){
      alert('请填写手机号');return false;
    }else if(!/^1[34578]\d{9}$/.test(Contach)){
      alert('手机号不正确');return false;
    }
	if(validation==""){
		alert('请输入验证码');return false;
	}

	$.post("/shouji/index.php/Enquiries/check_verify",{
		code: validation,
	},
	function(data){
		if(data==true){
			window.location.href='/shouji/index.php/Enquiries/orderinfo/Contach/'+Contach;
			//验证码输入正确
			// $.ajax({
			// 	type:'POST',
			// 	url:'/shouji/index.php/Enquiries/select/',
			// 	data:{
			// 		Contach:Contach,
			// 	},
			// 	success:function(pro){
			// 		// if(pro=='false'){
			// 		// 	alert('没有找到和此手机号相关的订单，请输入正确的手机号进行查询');return false;
			// 		// }else{
			// 		// 	window.location.href='/shouji/index.php/Enquiries/select/Contach/'+Contach;
			// 		// }
			// 	}
			// });
		}else{
			//验证码输入错误
			alert('验证码输入错误');return false;
		}
	});
});
</script>
</html>