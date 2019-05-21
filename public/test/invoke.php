<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/2 0002
 * Time: 11:14.
 */
class User
{
    protected $log;

    public function __construct(FileLog $log2)
    {
        $this->log = $log2;
    }

    public function Login()
    {
        $this->log->write();
    }
}

interface Log
{
    public function write();
}

class FileLog implements Log
{
    public function write()
    {
        // TODO: Implement write() method.
        echo '这是文件写入';
    }
}

class DataBaseLog implements Log
{
    public function write()
    {
        // TODO: Implement write() method.
        echo '这是数据库写入';
    }
}

function make($name)
{
    $reflection = new ReflectionClass($name);       //获得反射
    //print_r($reflection);
    $constructor = $reflection->getConstructor();   //获得构造函数
    //print_r($constructor);
    echo '<hr>';
    if (is_null($constructor)) {//无参数
        return $reflection->newInstance();
    }

    $dependencies = $constructor->getParameters();
    //var_dump($dependencies);
    $instance = getDependency($dependencies);

    return $reflection->newInstanceArgs($instance);
}

function getDependency($dependencies)
{
    $dependency = [];
    foreach ($dependencies as $v) {
        print_r($v);

        $dependency[] = make($v->getClass()->name);
    }

    return $dependency;
}

$obj = make('User');
$obj->login();
