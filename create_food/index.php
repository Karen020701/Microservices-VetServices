<?php

header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
header("Access-Control-Allow-Headers: Content-Type, Authorization"); 

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);
$action = $data['action'] ?? '';

if ($action === 'food') {
    require __DIR__ . '/routes/CFoodRoutes.php';
} else {
    http_response_code(400);
    echo json_encode(["message" => "Invalid action"]);
}
?>
