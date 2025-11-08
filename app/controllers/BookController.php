<?php
require_once __DIR__ . "/../models/Book.php";

class BookController {
    private $model;

    public function __construct()
    {
        $this->model = new Book(); 
    }
    public function index(){
        $books = $this->model->all();
        include_once __DIR__ . "/../views/index.php";
    }
    public function create(){
        include_once __DIR__ . "/../views/create.php";
    }
    public function store(){
        $this->model->create();
        header("Location: index.php");
        exit;
    }
}
?>