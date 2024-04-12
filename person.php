<?php
class Person
{
    // Public attributes
    public $name;
    public $age;

    // Private attributes
    private $email;
    private $password;

    // in case of private properties, we will have to use getters and setters
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    // Protected attributes
    protected $phoneNumber;
    protected $address;
}

$cyril = new Person();
$cyril->name = "Nkwi";
$cyril->setEmail("nkwi@gmail.com");
$cyril->setPassword("nkwi123");

echo $cyril->getEmail() . "<br>";
echo $cyril->getPassword() . "<br>";