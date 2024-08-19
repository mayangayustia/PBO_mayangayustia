<?php
//parent class
abstract class Car{
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro();
}
 
//child case
class Audi extends Car {
    public function intro () {
        return "Choose German quality! I'm an $this->name!";
    }
}
 
class Volvo extends Car {
    public function intro () {
        return "Proud to be Swedish! I'm a $this->name!";
    }    
}
 
class Citroen extends Car {
    public function intro () {
        return "French extravagance! I'm a $this->name!";
    }    
}
?>