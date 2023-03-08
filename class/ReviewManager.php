<?php 

class ReviewManager {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // ajouter des reviews

    public function ajout(Review $review, TourOperator $tour_operator_id) {
        $q = $this->db->prepare('INSERT INTO reviews( message, author, tour_operator_id ) VALUES( :message, :author, :tour_operator_id )');
        $q->bindValue(':message', $review->getMessage());
        $q->bindValue(':author', $review->getAuthor());
        $q->bindValue(':tour_operator_id', $tour_operator_id->getTour_operator_id());  
        $q->execute();
    }

    // Supprimer une review par son ID
    public function deleteById($id){
    $q = $this->db->prepare('DELETE FROM reviews WHERE id = :id');
    $q->bindValue(':id', $id);
    $q->execute();
    }

    // modifier une review 
    public function modifier(Review $review){
    $q = $this->db->prepare('UPDATE reviews SET message = :message, author = :author WHERE id = :id');
    $q->bindValue(':message', $review->getMessage());
    $q->bindValue(':author', $review->getAuthor());
    $q->bindValue(':id', $review->getId());
    $q->execute();
    }


    // afficher les reviews par rapport au tourOperator

    public function getList(TourOperator $tour_operator) {
        $reviews = [];
        $q = $this->db->prepare('SELECT reviews.* FROM `reviews` JOIN tour_operators ON reviews.tour_operator_id = tour_operators.id WHERE tour_operators.id = ?');
        $q->execute([intval($tour_operator->getId())]);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            array_push($reviews, new Review($donnees));
        }
        return $reviews;
    }
}

?>
