<?php
class ObjectSerialization{
    public string $languageName;
    public int $languageAge;
    public function __construct($languageName,$languageAge){
        $this->languageName = $languageName;
        $this->languageAge  = $languageAge;
    }

    public function getName(){
        return $this->languageName;
    }
    public function getAge(){
        return $this->languageAge;
    }
}

$first = new ObjectSerialization("php",34);

$serialize = serialize($first);

echo $serialize.PHP_EOL;

$unSerilize = unserialize($serialize);

var_dump($unSerilize) ;
