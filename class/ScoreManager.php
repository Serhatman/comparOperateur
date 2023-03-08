<?php 
class ScoreManager {

private $db;

public function __construct($db){
    
    $this->db = $db;
}

// ajouter un score

public function ajout(Score $score, TourOperator $tour_operator_id)
  {
    
    $q = $this->db->prepare('INSERT INTO score( value, author, tour_operator_id ) VALUES( :message, :author, :tour_operator_id');
    $q->bindValue(':value', $score->getValue());
    $q->bindValue(':author', $score->getAuthor());
    $q->bindValue(':tour_operator_id', $tour_operator_id->getTour_operator_id());
    
    $q->execute();
}

// affichers les scores 

public function getList(TourOperator $tour_operator)
{
    $score = [];

    $q = $this->db->prepare('SELECT score.* FROM `score` JOIN tour_operators ON score.id_tour_operator = tour_operators.id WHERE tour_operators.id = ?');
    $q->execute([intval($tour_operator->getId())]);
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {

        array_push($score,new Score($donnees));

    }
    return $score;
}
}
?>