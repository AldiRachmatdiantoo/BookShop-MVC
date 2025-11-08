<?php
require_once __DIR__ . "/../app/controllers/BookController.php";

$action = $_GET['action'] ?? "index";
$id = $_GET['id'] ?? "";
$controller = new BookController();

switch ($action) {
    case "index": $controller->index();break;
    case "create": $controller->create();break;
    case "store": $controller->store();break;
    case "edit" : $controller->edit($id);break;
    case "update" : $controller->update($id);break;
    case "delete" : $controller->delete($id);break;
}
?>