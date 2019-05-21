<?php
/**
 * 工厂模式（主要是将实例化对象放入到方法中）
 * User: Administrator
 * Date: 2019/3/17 0017
 * Time: 14:28.
 */
namespace \Design;

class DbFactory
{
    public function createDataBase($dbType)
    {
        switch ($dbType) {
            case 'mysqli':
                return new mysqli();
                break;
            default:
                return new mysql();
        }
    }
}
