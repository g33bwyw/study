<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/17 0017
 * Time: 16:36
 */
namespace Design;

use phpDocumentor\Reflection\DocBlock\Tags\Factory\Strategy;

interface UserStrategy
{
    public function showAd();
    public function recommendGoods();
}

class ManStrategy implements UserStrategy
{
    public function showAd()
    {
        echo '男士广告';
    }

    public function recommendGoods()
    {
        echo '男士商品';
    }
}

class WoManStrategy implements UserStrategy
{
    public function showAd()
    {
        echo '女士广告';
    }

    public function recommendGoods()
    {
        echo '女士商品';
    }
}

class Index
{
    protected $obj;
    public function index()
    {
        $this->obj->do();
    }

    public function setStrategy(UserStrategy $obj)
    {
        $this->obj = $obj;
        return $this;
    }
}

if ($_GET['type'] == 'm') {
    $obj = new ManStrategy();
} else {
    $obj = new WoManStrategy();
}
(new Index)->setStrategy($obj)->index();
