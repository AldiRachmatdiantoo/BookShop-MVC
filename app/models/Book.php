<?php
require_once __DIR__ . "/../../config/Database.php";

class Book {
    private $pdo;

    public function __construct()
    {
        $this->pdo = (new Database())->getConnection();
    }
    public function all(){
        $sql = "SELECT * FROM books";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create(){
        $sql = "INSERT INTO books (nama, penulis, thalaman, genre) VALUES (:nama, :penulis, :thalaman, :genre)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nama' => $_POST['nama'],
            'penulis' => $_POST['penulis'],
            'thalaman' => $_POST['thalaman'],
            'genre' => $_POST['genre']
        ]);
    }
    public function getBook($id){
        $sql = "SELECT * FROM books WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(["id" => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function update($id){
        $sql = "UPDATE books SET nama = :nama, penulis = :penulis, thalaman = :thalaman, genre = :genre WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nama' => $_POST['nama'],
            'penulis' => $_POST['penulis'],
            'thalaman' => $_POST['thalaman'],
            'genre' => $_POST['genre'],
            'id' => $id
        ]);
    }
}
?>