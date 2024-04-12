<?php

// working with constructors and destructors in php
class Car
{
    public $make;
    public $model;
    public $color;
    public $year;

    public function __construct($make, $model, $color, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
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
        echo "Color: {$this->color} <br>";
        echo "Year: {$this->year} <br><br>";
    }
}


$carObj = new Car("Tesla", "Model S", "Silver", "2020");
$carObj->start();
$carObj->stop();
$carObj->renderCarInfo();
