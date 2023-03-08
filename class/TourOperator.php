<?php
class TourOperator {
    private $id;
    private $name;
    private $link;

    public function __construct($id, $name, $link){
        $this->id = $id;
        $this->name = $name;
        $this->link = $link;
    }

    // getters et setters 

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getLink(){
        return $this->link;
    }

    public function setLink($link){
        $this->link = $link;
    }
}
?>