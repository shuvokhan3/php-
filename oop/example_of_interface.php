<?php
//P1:
//Version-1
class districtCollector implements IteratorAggregate{
 
    private $districts;

    public function setDistrict($inputDistrictValue){
        //settype() use to convert this variable into array
        settype($this->districts,"array");
        //array_push() push the value of this array;
        array_push($this->districts,$inputDistrictValue);
    }

    
    public function getIterator():Traversable{

        return new ArrayIterator($this->districts);
    }
}

$inputDis = new districtCollector();

$inputDis->setDistrict("Dhaka");
$inputDis->setDistrict("barishal");
$inputDis->setDistrict("barishal");
$inputDis->setDistrict("barishal");
$inputDis->setDistrict("barishal");


foreach($inputDis as $indexValue){
    echo $indexValue . "\n";
}

