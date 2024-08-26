<?php
require_once './controllers/CServicesController.php';

$request_method = $_SERVER["REQUEST_METHOD"];
$controller = new ServicesController();

switch($request_method) {
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        $name = $data['name'];
        $description = $data['description'];
        $id = $controller->create($name, $description);
        echo json_encode(['id' => $id]);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>