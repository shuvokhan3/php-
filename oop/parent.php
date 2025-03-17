<?php

class Parent{
    public $age ;

    public function __construct($val){
        $this->age = $val;
    }

    public function ageCal(){
        echo "Age is ". $age;   
    }

}