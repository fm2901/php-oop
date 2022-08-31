<?php
class Person {

    public $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age= $age;
    }

    public function printInfo() {
        echo "Имя: ".$this->name.", возраст: ".$this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

}