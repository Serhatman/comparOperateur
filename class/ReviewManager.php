<?php 
class ReviewManager {

private $db;

public function __construct($db){
    
    $this->db = $db;
}

// ajouter des review

public function ajout(Review $review, TourOperator $tour_operator_id)
  {
    
    $q = $this->db->prepare('INSERT INTO review( message, author, tour_operator_id ) VALUES( :message, :author, :tour_operator_id');
    $q->bindValue(':message', $review->getMessage());
    $q->bindValue(':author', $review->getAuthor());
    $q->bindValue(':tour_operator_id', $tour_operator_id->getTour_operator_id());
    
    $q->execute();
}

// afficher les reviews par rapport au tourOperator

public function getList(TourOperator $tour_operator)
{
    $reviews = [];

    $q = $this->db->prepare('SELECT reviews.* FROM `reviews` JOIN tour_operators ON reviews.id_tour_operator = tour_operators.id WHERE tour_operators.id = ?');
    $q->execute([intval($tour_operator->getId())]);
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {

        array_push($reviews,new Review($donnees));

    }
    return $reviews;
}
}
?>