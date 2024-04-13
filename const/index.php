<?php

class Greeting {
    // always appropriate to write in caps
    const GREET = "Hello world <br>";
    const GO = "Time for me to go.<br>";
    public function salut () {
        echo self:: GO;
    }
}

// use the scope resolution operator to access the const element
echo Greeting:: GREET;

$me = new Greeting();
echo $me->salut();