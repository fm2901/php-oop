<?php
class Car {

    private $wheels;
    private $body;

    function __construct(Body $body , Wheel $wheels ) {
        $this->body = $body;
        $this->wheels= $wheels;
    }


}