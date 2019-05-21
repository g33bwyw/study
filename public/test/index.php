<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/2 0002
 * Time: 16:46.
 */
define('ROOT', dirname(__FILE__));
include_once ROOT.'/BootStrap/Loader.php';
spl_autoload_register('Loader::load');
//$obj = new \App\Controller\IndexController();
//$obj->index();

