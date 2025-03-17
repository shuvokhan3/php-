<?php


class person{
    public $name;
    //this is a constructor method,it called automatically when an object arew called;
    //it called autometacally when a object is created;
    function __construct($val1){
        $this->name = $val1;
        echo "Hello";
        echo PHP_EOL;
    }
    public function message(){
        echo "Hello world";
    }
}
$person1 = new person('rahim');
$person1->message();
