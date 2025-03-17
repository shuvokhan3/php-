<?php
class person {
    public $name;
    function __construct($val1)
    {
        $this->name = $val1;
    }
    //use const to define a constant variable
    public const MASSAGE = "Hello world";
    function display(){
        echo person::MASSAGE . " Name is : " . $this->name;
    }
}
$p1 = new person("shuvo");
$p1->display();

