<?php
/**
 * 观察者模式
 * User: Administrator
 * Date: 2019/3/31 0031
 * Time: 11:17.
 */
/**
 * 观察者
 * Interface Observer.
 */
interface Observer
{
    public function update($event = null);
}

/**
 * 事件抽象类.
 */
abstract class EventGenerator
{
    private $obj = [];

    /**
     * 添加观察者.
     *
     * @param $key
     * @param $obj
     *
     * @return bool
     */
    public function addObserver(Observer $event)
    {
        array_push($this->obj, $event);
    }

    /**
     * 通知所有监听者.
     */
    public function notify()
    {
        if ($this->obj) {
            foreach ($this->obj as $v) {
                $v->update();
            }
        }
    }
}

class Event extends EventGenerator
{
    public function trigger()
    {
        echo 'event';
        $this->notify();
    }
}

class Email implements Observer
{
    public function update($event = null)
    {
        echo 'email';
    }
}

$test = new Event();
$test->addObserver(new Email());
$test->trigger();
