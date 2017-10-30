<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>更换外壳</title>
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
	<script type="text/javascript" src="/shouji/Public/Home/js/cell-public.js"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/cell-screen.js"></script>  
</head>
<body>
	<div class="cell-big">
		<div class="cell-banner">
			<img src="/shouji/Public/Home/images/shell-banner.png" width="100%">
		</div>

	</div>
	
	<h2 class="cell-h2">预约下单</h2>
	<div class="cell-order">
		
			<div class="cell-order-member">
				<select id="cell-model" name="select1">
					<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["sid"]); ?>"><?php echo ($v["model_number"]); ?></option>
					<!-- <option value="2">iphone 8</option>
					<option value="3">iphone 9</option> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			<div class="cell-order-member">
				<select id="screen-ab">
					<option value="0">请选择</option>
					<option value="355">内屏异常</option>
					<option value="155">外屏碎(显示正常)</option>
				</select>
			</div>
			<div class="cell-order-member">
				<select id="screen-color">
					<!-- <option value="1">金色</option>
					<option value="2">黑色</option>
					<option value="3">白色</option> -->
					<?php
 for($i=0;$i<count($color);$i++){ echo "<option value='$i+1'>$color[$i]</option>"; } ?>
				</select>
			</div>
			<div class="cell-order-member">
				<select id="cell-function">
					<option value="1">上门维修</option>
					<option value="2">邮寄维修</option>
					<option value="3">到店维修</option>
				</select>
			</div>
			<div class="cell-order-member cell-pa">
				<label for="">姓名</label>
				<input type="text" name="name" value="" id="name">
			</div>
			<div class="cell-order-member cell-pa">
				<label for="">手机</label>
				<input type="text" name="tel" value="" id="tel">
			</div>
			<div class="cell-order-member cell-branch">
				<select id="cell-address-branch">
					<option value="1">北京分部</option>
					<option value="2">天津分部</option>
					<option value="3">石家庄分部</option>
					<option value="4">上海分部</option>
				</select>
			</div>
			<div class="cell-order-text">
				地址:北京市海淀区知春路甲108号豪景大厦A座606室
			</div>
			<div class="cell-order-address cell-order-portion">
				<div class="order-add-0">
					<select id="cell-province">
						<option value="0">请选择</option>
					</select>
				</div>
				<div class="order-add-1">
					<select id="cell-city">
						<option>请选择</option>
					</select>
				</div>
				<div class="order-add-1">
					<select id="cell-county">
						<option>请选择</option>
					</select>
				</div>
			</div>
			<div class="cell-order-address cell-order-all">
				<div class="order-add-0">
					<select id="province" name="province" onchange="doProvAndCityRelation();">
	  　　　　　		<option id="choosePro" value="-1">请选择</option>
	  　　　　　	</select>	
				</div>
				<div class="order-add-1">
					<select id="citys" name="city" onchange="doCityAndCountyRelation();">
	 　　　　　 		<option id='chooseCity' value='-1'>请选择</option>
	 　　　　　 	</select>
				</div>
				<div class="order-add-1">
					<select id="county" name="county">
			　　　　　	<option id='chooseCounty' value='-1'>请选择</option>
			　　　　</select>
				</div>
			</div>
			<div class="cell-order-member cell-pa">
				<textarea placeholder="请填写详细地址信息" id="cell-text"></textarea>
			</div>
			<div class="cell-order-member cell-pa">
				<label for="">IMEI码(选填)</label>
				<input type="text" name="" value="">
			</div>
	</div>
	<div class="cell-phone-clause">
		<div class="select-input on">
			<input type="checkbox" name="" id="select-checkbox" checked="checked">
		</div>
		<p>我同意 <a href="help.html">《服务条款》</a></p>
	</div>
	<div class="cell-footer clearfix">
		<div class="cell-footer-l"><a href="tel:10086"><img src="/shouji/Public/Home/images/13.png"></a>客服 <span>￥<b></b></span></div>
		<div class="cell-footer-r" id="cell-submit">提交订单</div>
	</div>
</body>
<script>
$(function(){
	var color=$('#cell-model').find('option:selected').html();
	$('#cell-model').change(function(){
		var id=$(this).val();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/select',
			data:{
				id:id,
			},
			success:function(data){
				if(data){
					// console.log(data);
					var tr="";
					var color= new Array();
					color= JSON.parse(data);
					// console.log(color);
					// console.log(color.length);
					for(i=0;i<color.length;i++){
						tr+="<option value="+(i+1)+">"+color[i]+"</option>";
					}
					console.log(tr);
					$('#screen-color').html(tr);
					// alert(2);
					// alert(2);
				}		
			}
		});
	});
});


$('#cell-submit').click(function(){
	if ($('#name').val().trim() == '') {
			alert('请填写姓名！');
			return;
		}
		if($('#tel').val() == ''){
      		alert('请填写手机号');
      		return;
    	}else if(!/^1[34578]\d{9}$/.test($('#tel').val())){
      		alert('手机号不正确');
      		return;
    	}
    	if ($('#cell-function').val() == '1') {
	    	if ($('#cell-province').val() == '请选择' || $('#cell-city').val() == '请选择' || $('#cell-county').val() == '请选择') {
	    		alert('请选择地址！');
	    		return;
	    	}
    	}else if($('#cell-function').val() == '2' || $('#cell-function').val() == '3'){

    		if ($('#province').val() == '-1' || $('#citys').val() == '-1' || $('#county').val() == '-1') {
	    		alert('请选择地址！');
	    		return;
	    	}

    	}
		if ($('#cell-text').val().trim() == '') {
	 		alert('请填写详细地址');return false;
		}else if($('#cell-text').val().trim().length < 5){
	  		alert('详细地址太少');return false;
		}
if ($('#select-checkbox').is(':checked')){
	var path="";
	var model_number=$('#cell-model').find('option:selected').html();
	var Damage_reason=$('#screen-ab').find('option:selected').html();
	var color=$('#screen-color').find('option:selected').html();
	var Service=$('#cell-function').find('option:selected').html();
	var user=$('#name').val();
	var Contact=$("#tel").val();
	var path2=$('#cell-text').val();
	var price=$('.cell-footer-l').find('b').text();
	if(Service=="上门维修"){
		var path3=$('#cell-province').find('option:selected').html();
		var path4=$('#cell-city').find('option:selected').html();
		var path5=$('#cell-county').find('option:selected').html();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/insert',
			data:{
				Model_number:model_number,
				color:color,
				Damage_reason:Damage_reason,
				user:user,
				Contact:Contact,
				path:path3+path4+path5+path2,
				Service:Service,
				price:price,
			},
			success:function(data){
				if(data){
					window.location.href='/shouji/index.php/Succeed/index';
				}
			}
		});
	}else if(Service=="邮寄维修"){
		var path3=$('#province').find('option:selected').html();
		var path4=$('#citys').find('option:selected').html();
		var path5=$('#county').find('option:selected').html();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/insert',
			data:{
				Model_number:model_number,
				color:color,
				Damage_reason:Damage_reason,
				user:user,
				Contact:Contact,
				path:path3+path4+path5+path2,
				Service:Service,
				price:price,
			},
			success:function(data){
				if(data){
					window.location.href='/shouji/index.php/Succeed/index';
				}
			}
		});
	}else if(Service=="到店维修"){
		var path3=$('#province').find('option:selected').html();
		var path4=$('#citys').find('option:selected').html();
		var path5=$('#county').find('option:selected').html();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/insert',
			data:{
				Model_number:Model_number,
				color:color,
				Damage_reason:Damage_reason,
				user:user,
				Contact:Contact,
				path1:path3+path4+path5+path2,
				Service:Service,
				price:price,
			},
			success:function(data){
				if(data){
					window.location.href='/shouji/index.php/Succeed/index';
				}
			}
		});
	}
}else{
	alert('请仔细阅读手机服务条款');
	return;
}
});
</script>
</html>