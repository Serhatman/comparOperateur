<?php 
class TourOperatorManager {

private $db;

public function __construct($db){
    
    $this->db = $db;
}

// ajouter un tour_operator

public function ajout(TourOperator $tour_operator)
  {
    
    $q = $this->db->prepare('INSERT INTO tour_operator( name, link ) VALUES( :name, :link');
    $q->bindValue(':name', $score->getName());
    $q->bindValue(':link', $score->getLink());
    
    $q->execute();
}

// modifier un tour operator

public function getUpdate(){
    $q= $this->db->prepare('UPDATE tour_operators FROM tour_operator WHERE id= :id');
    $q->execute();
    }

// permet de supprimer un tour operator

public function DeleteTO(TourOperator $tour_operator){
$q= $this->db->prepare('DELETE  FROM tour_operator WHERE id= :id');
$q->bindValue(':id', $tour_operator->getId());
$q->execute();
}


}

public function getList()
    {
        $tourop = [];

        $q = $this->db->prepare('SELECT * FROM `tour_operator`');
        $q->execute();
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {

            array_push($tourop,new TourOperator($donnees));

        }

        return $tourop;
    }


?>