<?php

class Song{
    public $name;
    public $id;
    public function __construct($name, $id){
        $this->name = $name;
        $this->id   = $id;
    }

    public function SongName(){
        return $this->name. $this->id;
    }
    //here this singerName() method is static so it can not possible to overridding this method on the child class
    static public function singerName(){
        return "Atif";
    }
}

class playList extends song{
    public $playListName;
    public function __construct($playListName,$name, $id){
        parent::__construct($name, $id);//here i assign the value of the parent class property
        $this->playListName = $playListName;
    }

    public function playListInfo(){
        return "Playlist name is : ".$this->playListName. "Song and song id is : ".$this->name.$this->id;
    }

}

$favList = new playList("hard rock","Shuvvooo",101);

echo $favList->singerName();

