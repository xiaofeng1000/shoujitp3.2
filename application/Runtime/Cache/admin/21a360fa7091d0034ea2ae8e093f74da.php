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
	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">正在受理订单</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">   
        <h1 align="content">已受理订单列表</h1>
        <br/>
        <table class="tablelist">   
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
                <td><a href="/shouji/admin.php/Accepted/update/id/<?php echo ($v["id"]); ?>">已受理</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table> 
    </div>  
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
	</script>
</body>
</html>