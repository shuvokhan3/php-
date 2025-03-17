<?php

class Message{
    public $greeting = "Hello raisul";

    public function showMassage(){
        //this alow access the property of the current object
        return $this->greeting;
    }

}

$obj = new Message();
echo $obj->showMassage();