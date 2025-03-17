<?php
//__construct and __destruct megic method in php :--

// class Person{
//     //declarted a private method
//     private $name ,$age;
//     //define a constructor method
//     public function __construct($name=" ",$age=" "){
//         $this->name = $name;
//         $this->age  = $age;
//     }
//     //using this get() megic method i can access the private property outside the class
//     public function __get($pro){
//         return $this->$pro;
//     }
//     public function __destruct(){
//         echo "The object is almost finished!";
//         echo PHP_EOL;
//     }
// }
// $t1 = new Person("shuvo",34);
// //out side the class i can access the private property of this Person class;
// echo $t1->name;
// echo $t1->age;


//__call($methodName ,$methodArgument) megic method in php
// class UserInformation{
//     //megic method __construct use to assign the value of $name , $id ,$password;
//     public function __construct(public $name,public $id,public $password)
//     {
//         $this->name = $name;
//         $this->id   = $id;
//         $this->password = $password;
//     }

//     public function printName(){
//         echo "User name is : ".$this->name;
//         echo PHP_EOL;
//     }

//     public function __call($methodName , $methodParameter){

//         array_push($methodParameter, "Hello");

//         echo "Method Name is : ". $methodName;
//         echo PHP_EOL;
//         // foreach($methodParameter as $indexValue){
//         //     echo "Password is : ". $indexValue;
//         // }
//         print_r($methodParameter);
//     }
// }
// $p1 = new UserInformation("rahim","3301","shuvoj360");
// $p1 -> printName();
// $p1 -> userPassword($p1->password);//this function dose not exist in class ,using magic method __call(name ,parameter) i can create this method outside the class


//magic method __toString();
// class Comment{
//     public function __toString(){
//         return "Hello world";
//     }
// }
// $c1 = new Comment();
// echo $c1;


//__get($p1) magic method:-
//Q:- is private method access using __get() magic method?
// class Account{
//     private $name;
//     private $id;
//     private $password;
//     private $balance = 100;
//     public function __construct($name , $id , $password){
//         $this->name = $name;
//         $this->id   = $id;
//         $this->password = $password;
//     }

//     private function message(){
//         echo "WARNING !";
//     }
//     public function __get($unknownValue){
//         //when object call nonexisting value this time __get() method track it
//         echo "Object called ".$unknownValue ." which is unknown ";
//         echo PHP_EOL;

//         //Access inaccessable method like(protected , private):
//         // $this->message();
//         // echo PHP_EOL;
//         print $this->password;
//         echo PHP_EOL;
//         print $this->id;
//     }
// }
// $p1 = new Account("Jack",12345,"45kk45");
// //using unknown i can call the __get($unkonownVariable) method ,and using this method i can access all the private and protected property and method on the class;
// $p1 -> privateVariable;

class ZoomConnection{

    private static int $count = 0;
    public function __construct($value){
    
        self::$count = $value;
        self::$count++;

    }

    public function getCount(){
        return self::$count;
    }
    public function __destruct(){
        return self::$count-=20;
    }
}
$connection1 = new ZoomConnection(10);
$connection2 = new ZoomConnection(30);
// unset($connection2);
print_r($connection1);
print $connection1 -> getCount();

