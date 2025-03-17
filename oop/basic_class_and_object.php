<?php
class car {
    public $name;
    public $prize;

    function __construct($val1 ,$val2){
        $this->name = $val1;
        $this->prize = $val2;
    }

    private function totalName(){
        return $this->name;
    }
    public function totalPrize(){
        return $this->prize . $this->totalName();//to access string and int togather we set . operation;
    }
}
$car1 = new car("volvo",230000);
echo $car1->totalPrize();
