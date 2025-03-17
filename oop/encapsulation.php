<?php

class Account{
    private $balance;

    //set balance
    public function setBalance($val)  {
        $this->balance = $val;
    
    }

    //get balance
    public function getBalance() {
        echo "Yor balace is : ".$this->balance . "\n";
    }

    //withdrow
    public function withDrow($val)  {
        $this->balance -= $val;

        echo $this->balance;
    }

    //deposite
    public function deposite($val){
        $this->balance += $val;
        
        echo $this->balance;
    }

}


$obj = new Account();

$obj->setBalance(3000);
$obj->deposite(23);
$obj->withDrow(100);
$obj->getBalance();


//encapsulation in php

//Private Properties ($balace) → Cannot be accessed directly.
//Setters (setBalance()) → Allow controlled modification with validation.
//Getters (getBalance()) → Retrieve values safely.
