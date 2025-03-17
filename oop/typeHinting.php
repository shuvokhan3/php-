<?php
//declared a class
// class TypeHinting{
//     public $massage = "Hello";
// }
// //create an object
// $topic = new TypeHinting();

// //create display function,pass a class as an argument 
// function Display(typeHinting $typeHinting){
//     echo $typeHinting->massage;
// }
// //call the function
// Display($topic);



class User {
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public static function setUser(string $userName):self{
        $newUser = new self($userName);
        return $newUser;
    }

    public function getName(): string {
        return $this->name;
    }
}

//this is an object
$userName = User::setUser("rahim");

//using this object i just call the method;
echo $userName->getName();



