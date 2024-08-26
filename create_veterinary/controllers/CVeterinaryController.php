<?php
require_once './config/dbconfig.php';
require_once './models/CVeterinaryModel.php';

class VeterinaryController {
    public function create($full_name, $specialty, $phone_number, $email, $foto) {
        $db = new DatabaseConnector();
        $conn = $db->connect();
        $veterinary = new Veterinary();
        $veterinaryId = $veterinary->createVeterinary($full_name, $specialty, $phone_number, $email, $foto, $conn);
        return $veterinaryId;
    }
}
?>