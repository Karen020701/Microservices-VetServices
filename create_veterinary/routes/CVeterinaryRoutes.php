<?php
require_once './controllers/CVeterinaryController.php';

$request_method = $_SERVER["REQUEST_METHOD"];
$controller = new VeterinaryController();

switch($request_method) {
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        $full_name = $data['full_name'];
        $specialty = $data['specialty'];
        $phone_number = $data['phone_number'];
        $email = $data['email'];
        $foto = $data['foto'];
        $id = $controller->create($full_name, $specialty, $phone_number, $email, $foto);
        echo json_encode(['id' => $id]);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>