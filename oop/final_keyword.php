<?php
class Calculator{
    
    public function calculatePercentage($part , $whole){
        return ($part / $whole) * 100;
    }
}
$Calculation = new Calculator();
echo $Calculation->calculatePercentage(50,100);