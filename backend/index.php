<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$_config = dirname(__FILE__).'/../config.php';
$globals=dirname(__FILE__).'/protected/config/globals.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);


define('FILE_CONFIG','/images/fileconfig/');
define('IMAGE_LEVEL','/images/level/');

/**
Test image
**/
$_date = date("Y-m-d");
define('TEST_IMAGE','../images/cauhoi/'.$_date.'/');
define('AVATAR','/images/users/avatar/'.$_date.'/');

require_once($yii);
require_once($_config);
require_once($globals);
Yii::createWebApplication($config)->run();
error_reporting(E_ALL);
ini_set('display_errors', 'on');
