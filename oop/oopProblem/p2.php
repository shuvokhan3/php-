<?php
interface PaymentMethod{
    public function processPayment($amount);
}

class Bkash implements PaymentMethod{
   
    public function processPayment($amount=''){
        if($amount == '') return "Balance is : 0".PHP_EOL;
        return "Your Bkash balance is : $amount";
        echo PHP_EOL;
    }
}
class Nogod implements PaymentMethod{
    public function processPayment($amount='')
    {
        if($amount == '') return "Balance is : 0".PHP_EOL;
        return "Your Nogod balange is $amount".PHP_EOL;
    }
}
class Rocket implements PaymentMethod{
    public function processPayment($amount=''){
        if($amount == '') return "Balance is : 0".PHP_EOL;
        return "Your Rocket balance is : $amount".PHP_EOL;   
    }
}

function processPayment($paymentMethod ,$amount){
    echo $paymentMethod-> processPayment($amount).PHP_EOL;
}

$fistPaymentMethod = new Bkash();
processPayment($fistPaymentMethod,4000);

$secPaymentMethod = new Nogod();
processPayment($secPaymentMethod , 2000);

$thirdPaymentMethod = new Rocket();
processPayment($thirdPaymentMethod,1000);

