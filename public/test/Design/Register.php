<?php
/**
 * 注册树模式
 * User: Administrator
 * Date: 2019/3/17 0017
 * Time: 16:28.
 */

namespace Design;

class Register
{
    public static $obj;

    public static function setAttr($key, $val)
    {
        if (!self::$obj[$key]) {
            self::$obj[$key] = $val;
        }
    }

    public static function unsetAttr($key)
    {
        if (!self::$obj[$key]) {
            unset(self::$obj[$key]);
        }
    }
}
