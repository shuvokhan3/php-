<?php
class person{

    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function display(){
        echo $this->name;
        echo PHP_EOL;
    }

}

$p1 = new person("rahim");
echo $p1->display();

