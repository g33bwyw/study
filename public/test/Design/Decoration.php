<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/31 0031
 * Time: 15:25.
 */
interface Decoration
{
    function before();
    function after();
}

abstract class Base
{
    protected $instance=[];

    public function addDeciration(Decoration $instance)
    {
        array_push($this->instance, $instance);
    }

    public function before()
    {
        if ($this->instance) {
            foreach ($this->instance as $v) {
                $v->before();
            }
        }
    }

    public function after()
    {

        if ($this->instance) {
            krsort($this->instance);
            foreach ($this->instance as $v) {
                $v->after();
            }
        }
    }

}

class Test extends Base
{
    function index()
    {
        $this->before();
        echo "1111<br>";
        $this->after();
    }
}

class Color implements Decoration
{
    public function before()
    {
        echo 'red'."<br>";
    }

    public function after()
    {
        echo 'red finish'."<br>";
    }

}
class Size implements Decoration
{
    public function before()
    {
        echo 'XL'."<br>";
    }

    public function after()
    {
        echo 'XL finish'."<br>";
    }

}

class TypeTest implements Decoration
{
    public function before()
    {
        echo 'A'."<br>";
    }

    public function after()
    {
        echo 'A finish'."<br>";
    }

}

$obj = new Test();
$obj->addDeciration(new Color());
$obj->addDeciration(new Size());
$obj->addDeciration(new TypeTest());
$obj->index();
