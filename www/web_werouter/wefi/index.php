<?php

define("APP_PATH", "../app/");
header("Content-Type:text/html; charset=utf-8");
require_once('../../initphp/initphp.php'); //导入配置文件-必须载入
require_once(APP_PATH . 'conf/conf.wefi.php'); //公用配置
InitPHP::init(); //框架初始化 
