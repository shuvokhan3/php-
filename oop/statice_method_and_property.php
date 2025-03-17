<?php

//create traits for (nameoftheoperator)
trait OfferDetails{
    // take an array name offerDetails here i store data of the offer
    protected $offerDetails = [];

    //using polimorphisam
    //set all offer
    public function setOffer($offerDetails){
        //store data in array
        $this -> offerDetails[] = $offerDetails;
    }
    //get the offer
    public function getOffer(){
        //return the array
        return $this ->offerDetails;
    }

}



class Operator{
    //use trait
    use OfferDetails;

    protected static $OperatorName = 009;
    static $serialNum;
    public function __construct($OperatorName){
        $this->OperatorName = $OperatorName;
    }
    public function getOperatorName(){
        return $this->OperatorName;
    }
}

//Operator number
$val = Operator::$serialNum;
echo $val;
//create an object ,and set the Operator name
$Airtal = new Operator("Airtal");

//set the value of trait
$Airtal -> setOffer("24GB only 100 taka");
$Airtal -> setOffer("300 Minits only 100 taka");
$Airtal -> setOffer("400 Minits only 200 taka");




$offerDetails = implode(' <br> ' ,$Airtal -> getOffer()) ;
echo $offerDetails;






