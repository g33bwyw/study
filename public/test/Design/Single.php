<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/17 0017
 * Time: 14:57
 */
namespace Design;

class Single
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}