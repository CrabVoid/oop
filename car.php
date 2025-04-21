<?php

class Car {
 //properties / fields
    private $brand;
    private $colour;
    public $trim = "coupe";

    //Constructor
    public function __construct($brand, $colour = "none") {
        $this ->brand = $brand;
        $this ->colour = $colour;
    }

}

$car01 = new Car("Audi", "black");
echo $car01->trim;
$car02 = new Car("Renault", "white");
$car03 = new Car("Subaru", "blue");
$car4 = new Car("Ford");