<?php
/**
 * PHP链式操作
 * User: Administrator
 * Date: 2019/3/17 0017
 * Time: 14:06.
 */

namespace Design;

class DataBase
{
    private static $db;
    private $where = [];

    /**
     * 获得实例.
     */
    public static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = new self();

            return self::$db;
        }
    }

    public function where($where)
    {
        $this->where = array_merge($this->where, $where);

        return $this;
    }

    public function select()
    {
        return $this;
    }

    public function orderBy()
    {
        return $this;
    }

    public function get()
    {
        return $this->where;
    }
}
