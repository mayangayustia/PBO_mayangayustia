<?php
Class Fruit {
    public $name;
    public $color;
    public function _construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
 }

 Class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
 }
 $strawberry = new Strawberry("Strawbwerry", "red") ;
 $strawberry-> message();
 $strawberry->intro();
 ?>