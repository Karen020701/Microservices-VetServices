<?php
require_once './controllers/CUserController.php';

$request_method = $_SERVER["REQUEST_METHOD"];
$controller = new UserController();

switch($request_method) {
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        $email = $data['email'];
        $password = $data['password'];
        $full_name = $data['full_name'];
        $role = $data['role'];
        $id = $controller->create($email, $password, $full_name, $role);
        echo json_encode(['id' => $id]);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>