<?php
//final keyworld:--
final class Person{
    public function display(){
        $val = 19;
        if($val > 8) echo "Value is  : {$val}";
        else echo "Value is less than 8";
    }

}
abstract class RootPerson{
    public function root(){
        echo "I am root";
    }
}
class Person2 extends RootPerson{
    public function display2(){
        $val2 = 90;
        if($val2 > 50) echo "Bigger than 50";
        else echo "Less than 50";
    }
    function root(){
        echo "I am root";
    }
}
//error :abstract class can not inherited,
$p = new RootPerson();
$p->root();


