<?php
require_once __DIR__ . "/../app/controllers/BookController.php";

$action = $_GET['action'] ?? "index";
$controller = new BookController();

switch ($action) {
    case "index": $controller->index();break;
}
?>