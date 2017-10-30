<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/shouji/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/shouji/Public/admin/js/jquery-3.1.1.min.js"></script>
<style type="text/css">
    .tow{
       display: none;
       background-color: #c7c7c7;
    }
    .three{
       display: none;
    }
</style>
</head>


<body>
<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">分公司列表</a></li>
    </ul>
    </div>
    <div class="tools">
        <ul class="toolbar1">
        <li>添加省份</li>
        </ul>
    </div>
    <table class="tablelist">
        <thead>
        <tr>
        <th><!-- <input name="" type="checkbox" value="" checked="checked"/> --></th>
        <th>编号<!-- <i class="sort"><img src="images/px.gif" /></i> --></th>
        <th>地区</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody class="top">
            <tr class="one">
                <td><b data-id="1" class="clickb">+</b></td>
                <td>1</td>
                <td>河北省</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
            <tr class="tow id1">
                <td><b data-id="2" class="clickb">+</b></td>
                <td>2</td>
                <td>-石家庄</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>  
            <tr class="three id2">
                <td></td>
                <td>3</td>
                <td>--桥西区</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
            <tr class="three id2">
                <td></td>
                <td>4</td>
                <td>--桥东区</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
            <tr class="tow id1">
                <td><b class="clickb" data-id="">+</b></td>
                <td>3</td>
                <td>-沧州</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
            <tr class="three">
                <td></td>
                <td>7</td>
                <td>--dongguo</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
            <tr class="three">
                <td></td>
                <td>7</td>
                <td>--dongguo</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
            <tr class="tow">
                <td><b>+</b></td>
                <td>4</td>
                <td>-保定</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
        
             <tr class="one">
                <td><b>+</b></td>
                <td>5</td>
                <td>河南省</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>  
            <tr class="tow">
                <td><b>+</b></td>
                <td>4</td>
                <td>-开封</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
            <tr class="one">
                <td><b>+</b></td>
                <td>6</td>
                <td>湖南省</td>
                <td><a href="#" class="tablelink">添加</a>     <a href="#" class="tablelink">删除</a></td>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
        $('.clickb').click(function () {
            var id = $(this).data('id');
            $('.id'+id).toggle();
            // $(this).parent().parent().prev().show();
        });
        $('tr.tow b').click(function () {
            $(this).parent().parent().next().toggle();
            // $(this).parent().parent().prev().show();
        })
    </script>
</body></html>