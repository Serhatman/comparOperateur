<?php 


try {
    $connection = new PDO("mysql:host=localhost;dbname=comparo_full;charset=utf8", "root", "root");
} catch (Exception $s) {
    die('Erreur : ' . $s->getMessage());
}



/*
class Database 
{
    private $host = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "comparo_full";
    private $conn;
    
    public function connect() {
      $this->conn = null;
      
      try {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection error: " . $e->getMessage();
      }
      
      return $this->conn;
    }
    public function recuperInfosdestination() {
        $this->conn = $conn->prepare('SELECT * FROM destination');
        $connsStatement->execute();
        $conn = $connsStatement->fetchAll();

        $this->destinations = $conn;

        return $this->conn;
    }
}
*/
?>