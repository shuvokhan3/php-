<?php

class mainMessage{
    public $title;
    public $des;
    public function __construct($val1 , $val2){
        $this->title = $val1;
        $this->des   = $val2;
    }

    public function show(){
        return $this->title. '   '. $this->des;
    }
}

class productMessage extends mainMessage{
    public $rating;
    public function __construct($val , $pTitle, $pDes){
        //using parent key word i set the title and des cription value in parent class
        parent::__construct($pTitle, $pDes);

        $this->rating = $val;
    }

    public function displayRating(){

        //parent key work use to call the parent method name show()
        return parent::show(). "\n". $this->rating;
    }
}


$productMessage = new productMessage('5*', 'Bangladesh','hello bangladesh');
$val = $productMessage->displayRating();


echo $val;