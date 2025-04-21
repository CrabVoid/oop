<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$brand = "audi";
$colour = "black";

function getCarInfo($brand, $colour){
    return "Brand: " . $brand . ", Colour: " . $colour;
}

echo getCarInfo($brand, $colour);
?>

</body>
</html>