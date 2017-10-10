<?php

interface IEngine {}

class V8Engine implements IEngine {}

class Car {
    public function __constructor(IEngine $engine) {
        $this->engine = $engine;
    }
}

$car = new Car(new V8Engine());