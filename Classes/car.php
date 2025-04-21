<?php

class Car {
 //properties / fields
    private $brand;
    private $colour;

    //Constructor
    public function __construct($brand, $colour = "none") {
        $this ->brand = $brand;
        $this ->colour = $colour;
    }


    //getter & setter methods
    public function getBrand() {
        return $this -> brand;
    }

    public function setBrand($brand) {
        $this -> brand = $brand;
    }

    public function getColour() {
        return $this -> colour;
    }

    public function setColour($colour) {
        $allowedColours = ["black","red","white"];
        if (in_array($colour, $allowedColours)) {
            $this -> colour = $colour;
        }
        
    }



    //method

    public function getCarInfo() {
        return "Brand: " . $this->brand . ", Colour: " . $this->colour;
    }

}

$car01 = new Car("Audi", "black");
//echo $car01->trim;
echo "<br>";
echo $car01->getCarInfo();
$car02 = new Car("Renault", "white");
$car03 = new Car("Subaru", "blue");
$car4 = new Car("Ford");