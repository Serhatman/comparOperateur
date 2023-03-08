<?php

class Score {
    private $id;
    private $value;
    private $tour_operator_id;
    private $author_id;

    public function __construct($data){
        $this->id = $id;
        $this->value = $value;
        $this->tour_operator_id = $tour_operator_id;
        $this->author_id = $author_id;
    
    }

    // getters et setters 

    public function getId($id){
        return $this->id 
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getValue($value){
        return $this->value
    }

    public function setValue($value){
        return $this->value = $value;
    }

    public function getTour_operator_id($tour_operator_id){
        return $this->tour_operator_id 
    }

    public function setTour_operator_id($tour_operator_id){
        return $this->tour_operator_id = $tour_operator_id;
    }

    public function getAuthor_id($author_id){
        return $this->author_id
    }

    public function setAuthor_id($author_id){
        return $this->author_id = $author_id;
    }
}

?>