<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/3 0003
 * Time: 15:21.
 */
function sum($carry, $item)
{
    echo $carry . '-----' . $item . '<br/>';
    $carry += $item;

    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$v = array_reduce($a, 'sum', 10);
echo $v;
