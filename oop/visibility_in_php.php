<?php
//public,private,procted in php
class MyClass{
    private $name;
    private $age;
    function __construct($val1 ,$val2){
        $this->name = $val1;
        $this->age  = $val2;
    }
    private function calculateAge(){
        return $this->age+=5;
    }
    public function fullDetails(){
        $this->calculateAge();
        return "Fullname is : " . $this->name . ". New age is : " . $this->age;
    }

}

$class1 = new MyClass("rahim islam",30);
$finaResult = $class1->fullDetails();
echo $finaResult;


//private method dose not access global scope.
// $test = $class1->calculateAge();
// echo $test;


