<?php
// Agrega encabezados CORS
header("Access-Control-Allow-Origin: *"); // Permitir cualquier origen
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Encabezados permitidos

// Verifica si la solicitud es de tipo OPTIONS (CORS preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Enviar una respuesta sin cuerpo para las solicitudes OPTIONS
    http_response_code(204);
    exit;
}
$data = json_decode(file_get_contents("php://input"), true);
$action = $data['action'] ?? '';

switch ($action) {
    case 'veterinary':
        require __DIR__ . '/routes/CVeterinaryRoutes.php';
        break;
        header("HTTP/1.1 400 Bad Request");
        echo json_encode(["message" => "Invalid action"]);
        break;
}
?>