<?php
class Song {
    public $songId;
    public $songName;
}
//instanciate object
$song1 = new Song();
$song1 -> songId = 3301;
$song1 -> songName= "purnota";

//instanciate object
$song2 = new Song();
$song2 -> songId = 4401;
$song2 -> songName = "river flow on you!";

//instanciate object
$song3 = new Song();
$song3 -> songId = 4401;
$song3 -> songName = "november rain";



class Playlist {
    public $PlaylistName = [];
    public $songName = [];

    public function addSong($name , $song){
        $this->PlaylistName[] = $name;
        $this->songName[] = $song;
        
    }
}
//object instenciate:
$warfaze = new Playlist();
$warfaze -> addSong($song1,"rock");
// print_r($warfaze);

//object instanciate:
$classicalSong = new Playlist();
$classicalSong -> addSong("Classic",$song2);
$classicalSong -> addSong("rock",$song3);
print_r($classicalSong);
