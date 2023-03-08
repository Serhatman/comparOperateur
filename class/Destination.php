<?php
class Destination {
    private $id;
    private $location;
    private $price;
    private $tour_operator_id;

    public function __construct($id, $location, $price, $tour_operator_id){
        $this->id = $id;
        $this->location = $location;
        $this->price = $price;
        $this->tour_operator_id = $tour_operator_id;
    }
    
    // getters et setters

    public function getId(){
        return $this->id;
    }
   
    public function setId($id){
        return $this->id = $id;
    }
   
    public function getLocation(){
        return $this->location;
    }

    public function setLocation($location){
        return $this->location = $location;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        return $this->price = $price;
    }

    public function getTour_operator_id(){
        return $this->tour_operator_id;
    }

    public function setTour_operator_id($tour_operator_id){
        return $this->tour_operator_id = $tour_operator_id;
    }
}
?>