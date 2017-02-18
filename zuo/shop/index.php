<?php
    header('content-type:text/html;charset=utf-8');
//框架有二种模式用来显示错误信息
//1 生产模式(线上模式) 默认是生产模式false
//2 开发模式(调试模式)
//define ('APP_DEBUG',false);//这个为生产模式
define ('APP_DEBUG',true);//这个为调试模式 错误提示友好
//Home前台分组
define ('CSS_URL','/zuo/shop/Public/css/');
define ('IMG_URL','/zuo/shop/Public/img/');
define ('JS_URL','/zuo/shop/Public/js/');

///Admin后台分组
define ('Admin_CSS_URL','/zuo/shop/Admin/Public/css/');
define ('Admin_IMG_URL','/zuo/shop/Admin/Public/img/');
define ('Admin_JS_URL','/zuo/shop/Admin/Public/js/');
 require_once('../ThinkPHP/ThinkPHP.php');