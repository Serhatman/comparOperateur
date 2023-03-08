<?php 
class DestinationManager {

private $db;

public function __construct($db){
    
    $this->db = $db;
}

// ajouter des destinations

public function ajout(Destination $destination, TourOperator $tour_operator_id)
  {
    
    $q = $this->db->prepare('INSERT INTO destination( location, price, tour_operator_id) VALUES(:location, :price, :id_tour_operator');
    $q->bindValue(':location', $destination->getLocation());
    $q->bindValue(':price', $destination->getPrice());
    $q->bindValue(':tour_operator_id', $tour_operator_id->getTour_operator_id());
    
    $q->execute();
}

// permet de supprimer une destination //
   public function DeleteDestination(Destination $destination){
       $q= $this->db->prepare('DELETE  FROM destinations WHERE id= :id');
       $q->bindValue(':id', $destination->getId());
       $q->execute();
     }
   

// afficher les destinations

public function getList()
  {
    $desti = [];
    
    $q = $this->db->prepare('SELECT * FROM destination');
    $q->execute();
    
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      echo '<br>';
      array_push($desti, new Destination ($donnees));
    }
    
    return $desti;
  }
 
}
?>