<?php


class Singleton
{
    static $_instance = null;
    private $test = 0;

    private function __construct()
    {
    }

// final private function __clone(){}
    public static function get()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function test()
    {
        $this->test++;
    }

    public function gettest()
    {
        echo $this->test, '<br>';
    }
}

$obj1 = Singleton::get();
//$obj2 = clone $obj1;       //вариант1 создания объекта,  $obj2 ведет себя не зависимо от $obj1
$obj2 = Singleton::get();   //вариант2 создания объекта, синглтон в действии, $obj2 и $obj1 это один и тот же объект

$obj1->gettest();
$obj2->gettest();

$obj1->test();
$obj1->test();
$obj1->gettest();

$obj2->test();
$obj2->gettest();