<?php
//Overriding inheritance property and method:

//to solve this problem we use to final keyword;

class IndoorGame{
    protected $gameName;
    protected $gameId;

    public function __construct($gameName,$gameId){
        $this->gameName = $gameName;
        $this->gameId   = $gameId;
    }

    public function display(){
        return $this->gameName . $this->gameId;
    }
}
class pullBall extends IndoorGame{
    protected $gameName;
    protected $gameId;
    public function __construct($gameName, $gameId){
        parent::__construct($gameName,$gameId);
    }
    public function display(){
        return $this->gameName ." ". $this->gameId;
    }
}
// $gameTypes = new IndoorGame("Indoor Game","33k33");
// echo $gameTypes->display();
// echo PHP_EOL;
$play = new pullBall("Pullball","44kk3");
echo $play->display();
