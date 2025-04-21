<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require_once 'classes/car.php';

$car01 = new Car("Audi", "blue");
echo $car01->setColour("white");
echo $car01->getColour();

?>

</body>
</html>