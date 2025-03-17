<?php
include "php/php/oop/inheritance.php";

class Comment{
    public $text;
    public $userId;
    //constructor or magic method
    public function __construct($text ,$userId)
    {
        $this->text = $text;
        $this->userId=$userId;
    }
    public function userInfo(){
        echo $this->text . PHP_EOL .$this->userId;
    }
    //destructor function
    public function __destruct(){
        echo "Destructor\n";
    }
}
$newComment = new Comment("nice post","jone dou");

$newComment->userInfo();

