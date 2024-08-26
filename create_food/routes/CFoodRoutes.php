<?php
require_once './controllers/CFoodController.php';

$request_method = $_SERVER["REQUEST_METHOD"];
$controller = new FoodController();

if ($request_method === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $controller->create($data['descrip'], $data['type'], $data['price'], $data['quantity']);
    echo json_encode(['id' => $id]);
} else {
    header("HTTP/1.0 405 Method Not Allowed");
}
?>
