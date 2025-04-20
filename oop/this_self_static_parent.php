<?php

class Counter {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

$counterObj1 = new Counter();
$counterObj2 = new Counter();
echo Counter::getCount(); // Outputs: 2