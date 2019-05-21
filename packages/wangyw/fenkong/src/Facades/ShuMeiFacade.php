<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/3 0003
 * Time: 16:23
 */
namespace Wangyw\Fenkong\Facades;

use Illuminate\Support\Facades\Facade;

class ShuMeiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shumei';
    }
}