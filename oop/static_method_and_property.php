<?php
class ZoomConnection{

    private static int $count = 0;

    public function getCount(){
        
        return self::$count;
    }
    public function setCount(){
        return self::$count++;
    }

}

$connection1 = new ZoomConnection();
$connection1 ->setCount();
$connection1 ->setCount();
$connection1 ->setCount();
$value = $connection1 -> getCount();
echo $value;