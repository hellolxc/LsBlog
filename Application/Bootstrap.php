<?php

//定义框架常量
define('NAME', 'LsBlog');
define('VERSION', '1.0.0');
define('RUN_ROOT', Phar::running(false));//phar 下才能获取到正确包
define('DOCUMENT_ROOT', getenv("HOME").'/sl/');


//var_dump(config('github'));die;


//判断环境
if(php_sapi_name() === 'cli-server') {//web 服务器
    return new app\web\Router();
} else { //命令行
    return new app\cli\Index();
}