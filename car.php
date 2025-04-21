<?php

class Car {
 //properties / fields
    private $brand;
    private $colour;
    private $trim = "coupe";

    //Constructor
    public function __construct($brand, $colour) {
        $this ->brand = $brand;
        $this ->colour = $colour;
    }

}