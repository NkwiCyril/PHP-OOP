<?php 
class Vehicle {
    public $id;
    public $color;

    public function __construct($id, $color) {
        $this->id = $id;
        $this->color = $color;
    }
}