<?php

require "check_fruit.php";
require "fruit.php";

$new_fruit = new Fruit();
$apple = new Fruit();
$avocado = new Fruit();
$watermelon = new Fruit();

$new_fruit->set_name("Orange from Cameroon");
$new_fruit->set_color("Orange is the color of the fruit");
$new_fruit->set_weight(20);

$state = $apple instanceof Fruit;

if($state) {
    echo "Apple is a fruit";
} else {
    echo "Check again!";
}