<?php
class Person {

    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age= $age;
    }

    public function printInfo() {
        echo "Имя: ".$this->name.", возраст: ".$this->age;
    }
}