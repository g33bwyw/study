<?php
/**
 * 适配器模式
 * User: Administrator
 * Date: 2019/3/17 0017
 * Time: 16:31.
 */

namespace Design;

interface Adapt
{
    public function do();
}


class Demo implements Adapt
{
    public function do()
    {
        // TODO: Implement do() method.
        echo 111;
    }
}
