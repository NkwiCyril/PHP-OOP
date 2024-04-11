<?php

// defining the class Fruit
class Fruit
{
    public $name;
    public $color;
    public $weight;

    public function set_name($name)
    {
        $this->name = $name;
    }

		public function get_name() {
			return $this->name;
		}

    public function set_color($color)
    {
        $this->color = $color;
    }

		public function get_color() {
			return $this->color;
		}

		public function get_weight() {
			return $this->weight;
		}

    public function set_weight($weight)
    {
        $this->weight = $weight;
    }
}

$new_name = new Fruit();

$new_name->set_name("Orange from Cameroon");
$new_name->set_color("Orange is the color of the fruit");
$new_name->set_weight(20);

echo "<b>Name of fruit: </b>". $new_name->get_name(). "<br>";
echo "<b>Color of fruit: </b>".$new_name->get_color(). "<br>";
echo "<b>Weight of fruit: </b>".$new_name->get_weight(). "<br>";
