<?php
require 'payment.php';
class Payment extends Services
{
    public function typeFunction()
    {
        return "Hello Sir";
    }

    public function typeClass($number, $pin, $type_of_ISP)
    {
        echo "<b>Phone number: </b>$number <br>";
        echo "<b>PIN Code: </b>$pin<br>";
        echo "<b>ISP: </b>$type_of_ISP<br>";
    }
}

$pay = new Payment();
$pay->typeFunction();
$pay->typeClass(651085550, 767432, "MTN");
