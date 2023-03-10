<?php

$tour_operatorsStatement = $connection->prepare('SELECT * FROM tour_operator');
$tour_operatorsStatement->execute();
$tour_operators = $tour_operatorsStatement->fetchAll();

?>