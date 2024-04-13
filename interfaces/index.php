<?php

interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public $name = "Dog";
    public function makeSound() {
        echo "woof! woof!<br>"; 
    }
}

class Cat implements Animal {
    public $name = "Cat";

    public function makeSound() {
        echo "meow! meow<br>";
    }
}

class Cow implements Animal {
    public $name = "Cow";

    public function makeSound() {
        echo "mooo!<br>";
    }
}

class Human implements Animal {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function makeSound() {
        echo "Hello world<br>";
    }
}

$dog = new Dog();
$cat = new Cat();
$cow = new Cow();
$person = new Human ("Akinimbom Nkwi");


$animals = [$dog, $cat, $cow, $person];

foreach ($animals as $animal) {
    echo "<b>" . $animal->name . " says: </b>";
    $animal->makeSound();
}