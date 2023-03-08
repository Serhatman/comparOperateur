<?php

$destinationsStatement = $connection->prepare('SELECT * FROM destinations');
$destinationsStatement->execute();
$destinations = $destinationsStatement->fetchAll();

?>