<?php
header("content-type:text/html;charset=utf-8");

define("BIND_MODULE","admin");
define("APP_PATH","application/");
define("APP_DEBUG",true);
define("BUILD_DIR_SECURE",false);

include_once 'ThinkPHP/ThinkPHP.php';