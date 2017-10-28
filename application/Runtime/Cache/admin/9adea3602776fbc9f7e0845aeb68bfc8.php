<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>无标题文档</title>
	<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/admin/js/jquery.js"></script>
</head>

<body>
	
	<div class="place">
		<span>位置：</span>
		<ul class="placeul">
    		<li><a href="#">修改手机型号</a></li>
    	</ul>
	</div>

	<form action="/shouji/admin.php/Phone/update" method="POST">

	<ul class="forminfo">
    	<li><label>型号<b>*</b></label><input name="number" type="text" class="dfinput" value="<?php echo ($pro["Model_number"]); ?>"  style="width:518px;"/></li>
   		<input type="hidden" value='<?php echo ($pro["bid"]); ?>' name='id'>
    	<li><label>所属品牌<b>*</b></label>  
    

	    	<div class="vocation">
	    		<select class="select1" name="brand">
	    			<?php
 for($i=0;$i<count($obj);$i++){ if($pro['brands']==$obj[$i]['brands']){ echo "<option selected = 'selected'>".$obj[$i]['brands']."</option>"; }else{ echo "<option>".$obj[$i]['brands']."</option>"; } } ?>
	    		</select>
	    	</div>
    
    	</li>
    
    	<li><label>手机/平板<b>*</b></label>
    
	    	<div class="vocation">
			    <select class="select2" name='type'>
			    	<?php
 if($pro['phone']==1){ echo "<option selected = 'selected'>手机</option>"; echo "<option>平板</option>"; }else if($pro['pad']==1){ echo "<option >手机</option>"; echo "<option selected = 'selected'>平板</option>"; } ?>
			    </select>
	    	</div>
    	</li>
    	
    	<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="马上修改"/></li>
    </ul>
	</form>
</body>
<script>

</script>
</html>