<?php

header("Access-Control-Allow-Origin: *");
//入口文件绑定模块名
//define('BIND_MODULE','index');

define('APP_PATH', __DIR__ . '/application/');
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
