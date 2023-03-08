<?php 
include '../process/db.php';
class TourOperatorManager {

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    // ajouter un tour_operator
    public function ajout(TourOperator $tour_operator) {
        $q = $this->db->prepare('INSERT INTO tour_operator (name, link) VALUES (:name, :link)'); 
        $q->bindValue(':name', $tour_operator->getName()); 
        $q->bindValue(':link', $tour_operator->getLink()); 
        $q->execute();
    }

    // modifier un tour operator
    public function update(TourOperator $tour_operator) { 
        $q = $this->db->prepare('UPDATE tour_operator SET name = :name, link = :link WHERE id = :id'); 
        $q->bindValue(':id', $tour_operator->getId());
        $q->bindValue(':name', $tour_operator->getName());
        $q->bindValue(':link', $tour_operator->getLink());
        $q->execute();
    }

    // permet de supprimer un tour operator
    public function delete(TourOperator $tour_operator){
        $q = $this->db->prepare('DELETE FROM tour_operator WHERE id = :id');
        $q->bindValue(':id', $tour_operator->getId());
        $q->execute();
    }

    // récupérer la liste des tour operators
    public function getList() {
        $tourop = [];
        $q = $this->db->prepare('SELECT * FROM tour_operator');
        $q->execute();
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $tourop[] = new TourOperator($donnees);
        }
        return $tourop;
    }
}
?>
