<?php
class ScoreManager {

private $db;

public function __construct($db){
    $this->db = $db;
}

// ajouter un score

public function ajout(Score $score, TourOperator $tour_operator)
{
    $q = $this->db->prepare('INSERT INTO score(value, author, id_tour_operator) VALUES(:value, :author, :id_tour_operator)');
    $q->bindValue(':value', $score->getValue());
    $q->bindValue(':author', $score->getAuthor());
    $q->bindValue(':id_tour_operator', $tour_operator->getId());
    $q->execute();
}

// afficher les scores 

public function getList(TourOperator $tour_operator)
{
    $scores = [];

    $q = $this->db->prepare('SELECT * FROM score WHERE id_tour_operator = ?');
    $q->execute([$tour_operator->getId()]);
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
        array_push($scores, new Score($donnees));
    }
    return $scores;
}

// supprimer un score

public function delete(Score $score)
{
    $q = $this->db->prepare('DELETE FROM score WHERE id = ?');
    $q->execute([$score->getId()]);
}

}
?>