<?php
class Book extends Product {
    function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
}