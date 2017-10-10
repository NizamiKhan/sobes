<?php
class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {
    /* foo() будет скопирован в В, следовательно его область действия по прежнему А,
       и вызов будет успешен*/
}

class C extends A {
    private function foo() {
        /* исходный метод заменен; область действия нового метода С */
    }
}

$b = new B();
$b->test();
$c = new C();
$c->test();   //не верно
?>