<?php
require_once './controllers/CAccessoryController.php';

class RequestHandler {
    public static function handlePostRequest($controller) {
        $data = self::getRequestData();
        $id = $controller->create($data['name'], $data['type'], $data['price'], $data['quantity']);
        self::sendJsonResponse(['id' => $id]);
    }

    private static function getRequestData() {
        return json_decode(file_get_contents("php://input"), true);
    }

    private static function sendJsonResponse($data) {
        echo json_encode($data);
    }
}

$request_method = $_SERVER["REQUEST_METHOD"];
$controller = new AccessoryController();

switch($request_method) {
    case 'POST':
        RequestHandler::handlePostRequest($controller);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>
