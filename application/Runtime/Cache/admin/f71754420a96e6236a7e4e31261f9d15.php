<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/shouji/Public/admin/css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/shouji/Public/admin/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/shouji/Public/admin/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/shouji/Public/admin/js/select-ui.min.js"></script>
<script type="text/javascript" src="/shouji/Public/admin/editor/kindeditor.js"></script>

<script type="text/javascript">
    KE.show({
        id : 'content7',
        
    });
  </script>
  
<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">关于我们</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    
    <div id="usual1" class="usual"> 
    
  	<div id="tab1" class="tabson">
    <form action="/shouji/admin.php/About/update" method="POST">
        <ul class="forminfo">
       
    <li><label>关于我们<b>*</b></label>
    <input type="hidden" value='<?php echo ($obj["id"]); ?>' name='id'>
    <textarea id="content7" name="content" style="width:700px;height:250px;visibility:hidden;" ></textarea>
    
    </li>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="保存"/></li>
    </ul>
    </form>

    </div> 
           
	</div> 
 
	<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>   
    </div>

</body>
<script type="text/javascript">
    $('#content7').val('<?php echo ($pro); ?>');
</script>
</html>