<?php 

// PDO Connection
try
{
	$db = new PDO(
        'mysql:host=localhost;dbname=comparo_full;charset=utf8', 
        'root', 
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>