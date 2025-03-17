<?php

class selfAndStatic {
    public static $cnt = 0;

    public function __construct(){
        self::$cnt++;
    }

    public static function getCount(){
        return self::$cnt;
    }
}

$obj1 = new selfAndStatic();//1

$obj2 = new selfAndStatic();//2
$obj3 = new selfAndStatic();//2

$cntVal = selfAndStatic::getCount();

echo $cntVal;