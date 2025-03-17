<?php
namespace php\php\oop\trait;
trait HasTagTraits{
    protected $tag = [];

    public function setTag($tag){
        $this->tag[] = $tag;
    }
    public function getTag(){
        return $this->tag;
    }
}

