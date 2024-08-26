<?php


function setCorsHeaders() {
    header("Access-Control-Allow-Origin: *"); 
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); 
}


setCorsHeaders();

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);
$action = $data['action'] ?? '';

switch ($action) {
    case 'accessory':
        require __DIR__ . '/routes/CAccessoryRoutes.php';
        break;
    default:
        header("HTTP/1.1 400 Bad Request");
        echo json_encode(["message" => "Invalid action"]);
        break;
}
?>
