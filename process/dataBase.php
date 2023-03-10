<?php 


try {
    $connection = new PDO("mysql:host=localhost;dbname=comparo_full;charset=utf8", "root", "root");
} catch (Exception $s) {
    die('Erreur : ' . $s->getMessage());
}

?>