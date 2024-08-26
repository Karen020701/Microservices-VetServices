<?php
require_once './controllers/CToysController.php';

$request_method = $_SERVER["REQUEST_METHOD"];
$controller = new ToysController();

switch($request_method) {
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        $name = $data['name'];
        $type = $data['type'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $id = $controller->create($name, $type, $price, $quantity);
        echo json_encode(['id' => $id]);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>