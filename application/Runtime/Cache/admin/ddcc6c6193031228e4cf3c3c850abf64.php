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
    <li><a href="#">受理修理损坏</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">   
        <h1 align="content">已受理订单列表</h1>
        <br/>
        <table class="tablelist">   
        <tr>
            <th>原因</th>
            <th>具体原因1</th>
            <th>修理价格1</th>
            <th>具体原因2</th>
            <th>修理价格2</th>
            <th>操作</th>
        </tr>

        <?php if(is_array($obj)): $i = 0; $__LIST__ = $obj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($v["tabulation"]); ?></td>
                <td><?php echo ($v["question1"]); ?></td>
                <td><?php echo ($v["The_price1"]); ?></td>
                <td><?php echo ($v["question2"]); ?></td>
                <td><?php echo ($v["The_price2"]); ?></td>
                <td>
                    <input type="button" value="修改" onclick="updateBbs(<?php echo ($v["id"]); ?>)">
                    <input type="button" value="删除" onclick="delBbs(<?php echo ($v["id"]); ?>)">
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table> 
        <button type="button" id="inse">添加修理范围</button>  
    </div>  
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
function delBbs(id){
          if(confirm("是否删除该记录？")){
              window.location = "/shouji/admin.php/Spoilage/delete/id/"+id;
          }
      }

      function updateBbs(id){
          if(confirm("是否修改该记录？")){
              window.location = "/shouji/admin.php/Spoilage/find/id/"+id;
          }
          
      }
$('#inse').click(function(){
    window.location = "/shouji/admin.php/Spoilage/add";
});
</script>
</body>
</html>