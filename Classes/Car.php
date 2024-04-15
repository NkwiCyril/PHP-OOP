<?php

class Car
{
    private $brand;
    private $color;

    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {

        $this->color = $color;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
