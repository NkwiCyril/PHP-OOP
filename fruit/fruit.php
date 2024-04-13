<?php
class Fruit extends HarvestedFruit
{
    public $name;
    public $color;
    public $weight;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }

    public function get_weight()
    {
        return $this->weight;
    }

    public function set_weight($weight)
    {
        $this->weight = $weight;
    }
}