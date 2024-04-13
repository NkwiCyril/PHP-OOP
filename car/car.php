<?php

require 'vehicle.php';
// working with constructors and destructors in php
class Car extends Vehicle
{
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    
    }

    public function __destruct() {
        echo"Here, I call the destructor <br>";
        echo "This is a good {$this->make}";
    }

    public function start()
    {
        echo "Voom voom<br>";
        echo "This {$this->make} {$this->model} has started<br><br>";
    }

    public function stop()
    {
        echo "Piip! <br>";
        echo "This {$this->make} {$this->model} has stopped<br><br>";
    }

    public function renderCarInfo()
    {
        echo "Make: {$this->make} <br>";
        echo "Model: {$this->model} <br>";
        echo "Year: {$this->year} <br><br>";
    }
} 

$carObj = new Car("Tesla", "Model S", "2020");
$carObj->start();
$carObj->stop();
$carObj->renderCarInfo();
