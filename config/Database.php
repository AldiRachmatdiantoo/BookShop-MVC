<?php
class Database {
    private $host = "localhost";
    private $dbname = "db_tokobuku";
    private $username = "root";
    private $password = "";

    public function getConnection(){
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e){
            die("Error Database: " . $e->getMessage());
        }
    }
}
?>