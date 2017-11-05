<?php
/**
 * 
 * @author
 * @date
 * @version
 */

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//设置响应头，确定字符编码
header("Content-Type:text/html,charset=UTF-8");

// 定义应用目录
define('APP_PATH','./Application/');

//定义上传文件真实地址
define('UPLOAD_PATH','/Public/Upload');

//定义入口文件的真实目录
define('ROOT_PATH',__DIR__);

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
