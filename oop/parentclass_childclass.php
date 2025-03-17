<?php
class ParentClass{
    private $name,$age;
    public function __construct($name="No Body" , $age =0){
        $this->name = $name;
        $this->age  = $age;
    }
    public function sayHi(){
        echo "Hi my name is {$this->name} and age is {$this->age}\n";
    }
}
class ChildClass extends ParentClass{

    public function sayHi(){
        parent::sayHi();
        echo "Hi";

    }
}
$p1 = new ChildClass();
$p1->sayHi();

