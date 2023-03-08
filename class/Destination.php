<?php

class Destination {
    private $id;
    private $location;
    private $price;
    private $image;
    private $tour_operator_id;

    public function __construct($data){
        $this->id = $id;
        $this->location = $location;
        $this->price = $price;
        $this->tour_operator_id = $tour_operator_id;

    }
    
    // getters et setters

    public function getId($id){
        return $this->id
    }
   
    public function setId($id){
        return $this->id = $id;
    }
   
    public function getLocation($location){
        return $this->location 
    }

    public function setLocation($location){
        return $this->location = $location;
    }

    public function getPrice($price){
        return $this->price
    }

    public function setPrice($price){
        return $this->price = $price;
    }

    public function getTour_operator_id($tour_operator_id){
        return $this->tour_operator_id
    }

    public function getTour_operator_id($tour_operator_id){
        return $this->tour_operator_id = $tour_operator_id;
    }
}

?>