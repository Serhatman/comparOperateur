<?php

class Review {
    private $id;
    private $message;
    private $tour_operator_id;
    private $author_id;

    public function __construct($data){
        $this->id = $id;
        $this->message = $message;
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

    public function getMessage($message){
        return $this->message
    }

    public function setMessage($message){
        return $this->message = $message;
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