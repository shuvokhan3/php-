<?php
//This is a interfaces
interface Message{
    //this is an interface method it only declared on interfaces
    public function saySomething(); 
}
class England implements Message{
    public function saySomething(){
        echo "I am from England\n";
    }
}
class Bangladesh implements Message{
    public function saySomething(){
        echo "I am from Bangladesh\n";
    }
}

//a interface extends another interface but a class dose not extends a interface
//here a interface inherite another interface
interface gmail extends Message{
    public function sayOnGmail();
    public function sayHi();
}

class BanPersonSendgmail implements gmail{
    public function saySomething(){
        echo "I am from Bangladesh\n";
    }
    public function sayOnGmail(){
        echo "I am now on gmail\n";
    }
    public function sayHi(){
        echo "Hi";
    }
}
$b1 = new BanPersonSendgmail();
$b1->saySomething();
$b1->sayOnGmail();
$b1->sayHi();


