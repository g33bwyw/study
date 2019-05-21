<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/17 0017
 * Time: 9:51.
 */
class Loader
{
    public static function load($class)
    {
        $file = ROOT . '/' . str_replace('\\', "/", $class) . '.php';
        require_once($file);
    }
}
