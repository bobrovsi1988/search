<?php
defined("YII_DEBUG") or define("YII_DEBUG",true);
require_once(__DIR__.DIRECTORY_SEPARATOR."framework".DIRECTORY_SEPARATOR."yii.php");
$config = __DIR__. DIRECTORY_SEPARATOR. "config.php";
$appplication = YII::createWebApplication($config);
$appplication->run();
/**
 * Created by PhpStorm.
 * User: morder
 * Date: 10.09.14
 * Time: 14:43
 */ 