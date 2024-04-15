<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP with PHP</title>
</head>
<body>


    
</body>
</html>

<?php

require_once "Classes/Car.php";

$car1 = new Car("Tesla", "silver");
$car2 = new Car("mercedes-benz","black");
$car1->setColor("Yellow");
$car2->setColor("Orange");

echo $car1->getBrand();
echo "<br>";
echo $car2->getBrand();
echo "<br>";
echo $car1->getColor();
echo "<br>";
echo $car2->getColor();


?>