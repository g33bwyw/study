<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/3 0003
 * Time: 16:09
 */
namespace Wangyw\Fenkong;
use Illuminate\Config\Repository;

class ShuMei
{
    protected $config;

    public function __construct(Repository $config)
    {
        $this->config = $config->get('shumei');
    }

    public function index()
    {
        echo 'hello';
    }
}