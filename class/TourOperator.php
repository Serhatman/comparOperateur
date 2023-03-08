<?php

class TourOperator {
    private $id;
    private $name;
    private $link;

    public function __construct($data){
        $this->id = $id;
        $this->name = $name;
        $this->link = $link;

    }

    // getters et setters 

    public function getId($id){
        return $this->id 
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getName($name){
        return $this->name
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function getLink($link){
        return $this->link 
    }

    public function setLink($link){
        return $this->link = $link;
    }

}

?>