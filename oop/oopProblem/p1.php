<?php

//create an interface name shape
interface Shape{
    public function calculateArea();
    public function calculatePerimeter();
    public function colorAndName();
    public function display();
}

//
class Circle implements Shape{
    public float $pi = 3.1416;
    public int $radius;
    public function __construct(int $radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
    
        $result = $this->pi * pow($this->radius,2);
        return $result;
    }
    public function calculatePerimeter(){
        $result = 2 * ( $this->radius * $this->radius);
        return $result;
    }
    public function colorAndName(){
        echo "Color is green and is Circle";
        echo PHP_EOL;
    }
    public function display(){
        
    }
}

$firstCircle = new Circle(34);
echo "Circle area is : ".$firstCircle->calculateArea();



