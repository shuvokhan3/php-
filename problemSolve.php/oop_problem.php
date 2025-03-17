<?php
// 1. Shape Hierarchy:

// Create a base class Shape with properties like color and name.

// Define methods in Shape to calculate area and perimeter (implementations can be placeholders for now)....

// Create derived classes Rectangle, Circle, and Triangle inheriting from Shape.

// Implement specific area and perimeter calculation methods for each derived class.

// In your main script, create instances of each shape, set their colors and names, and call their respective calculation methods. Print the results.

//base class

abstract class Shape {
    private $color,$name;
    public function __construct($val1 , $val2){
        $this->color = $val1;
        $this->name  = $val2;

    }
    protected function colorAndName(){
        echo "Display value : ";
        echo $this->color ." " .$this->name."\n";
    }

    //use abstruct method:
    abstract public function display($v1=1 ,$v2=1);

}


class Rectangle extends Shape{
    private $w,$l;

    public function display($v1= 1,$v2 = 1){
        $this->w = $v1;
        $this->l = $v2;
        parent::colorAndName();
        $areaOfRectangle = $this->w * $this->l;
        echo "Calculation value : {$areaOfRectangle}";
        echo PHP_EOL;
    }
}


class Circle extends Shape{
    private $pi=3.1416,$r;
    public function display($v1 = 1 ,$v2 = 1){
        $this->r = $v1;
        $circleArea = $this->pi * ($this->r * $this->r);
        parent::colorAndName();
        echo "Calculation value : {$circleArea}";
        echo PHP_EOL;
    }
}

class Triangle extends Shape{
    private $b,$h;
    public function display($v1 = 1,$v2 = 1){
        $this->b = $v1;
        $this->h = $v1;
        parent::colorAndName();
        $TriangleArea = 1/2*($this->b * $this->h);
        echo "Calculation value : {$TriangleArea}";
        echo PHP_EOL;
    }
}


$c1 = new Circle("red","cir");
$c1->display(4);

$t1 = new Triangle("Green", "Trinagle");
$t1->display(3,4);

