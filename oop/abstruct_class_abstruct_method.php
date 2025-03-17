<?php
// abstract class Car{
//     //public variable
//     public $ownerName;

//     //constructor method
//     public function __construct($name){
//         $this->ownerName = $name;
//         $this->ownerDetails();
//     }
//     //class method
//     public function ownerDetails(){
//         echo "Owner Name is : " .$this->ownerName ."\n";
//     }
//     //abstruct method declaration in the parent class
//     abstract public function start();
//     abstract public function end();
   
// }

// class bmw extends Car{
//     //abstruct method declaration in the child class
//     public function start(){
//         echo "bmw is started\n";
//     }
//     public function end(){
//         echo "bmw is end\n";
//     }
// }

// class volvo extends Car{
//     //abstruct method declaration in the child class
//     public function start(){
//         echo "Volvo start\n";
//     }
//     public function end(){
//         echo "volvo end\n";
//     }
// }

// //careate object and call the child class that inharited in the parent class
// $c1 = new bmw("rifat");
// $c1->start();
// $c1->end();

// $c2 = new volvo("shuvo");
// $c2->start();

abstract class Car{
    abstract public function start();
    abstract public function end();

    public function prize(){
        echo "The prize is : 40000k";
        echo PHP_EOL;
    } 
    public function display($value){
        echo $value.PHP_EOL;
        echo "Thank you!";
        echo PHP_EOL;
    }
}
class Volvo extends Car{
    public function start(){
        return "The car has start";
    }
    public function end(){
        return "The car has end";
    }
}
class Bmw extends Car{
    public function start(){
        return "The bmw is start";
    }
    // public function end(){
    //     return "The bmw  has end";
    // }
}
$c1 = new Bmw();
$c1->display($c1->start());
$c1->display($c1->end());

$c2 = new Volvo();
$c2->display($c2->start());
$c2->display($c2->end());







