<?php
//P1:
//Version-1
class districtCollector implements IteratorAggregate,Countable{
 
    private $districts;

    public function setDistrict($inputDistrictValue){
        //settype() use to convert this variable into array
        settype($this->districts,"array");
        //array_push() push the value of this array;
        array_push($this->districts,$inputDistrictValue);
    }

    //add ArrayIterable feature
    public function getIterator():Traversable{

        return new ArrayIterator($this->districts);
    }

    //add Count feature
    public function Count():int{
        return count($this->districts);
    }
}

$inputDis = new districtCollector();

$inputDis->setDistrict("Dhaka");
$inputDis->setDistrict("barishal");
$inputDis->setDistrict("barishal");
$inputDis->setDistrict("barishal");
$inputDis->setDistrict("barishal");

echo "value is :";
echo PHP_EOL;
// foreach($inputDis as $indexValue){
//     echo $indexValue . "\n";
// }
// echo "Total count : ";
// echo "<br/>";
// echo count($inputDis);
