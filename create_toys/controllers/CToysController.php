<?php
require_once './config/dbconfig.php';
require_once './models/CToysModel.php';

class ToysController {
    public function create($name, $type, $price, $quantity) {
        $db = new DatabaseConnector();
        $conn = $db->connect();
        $toys = new Toys();
        $toysId = $toys->createToys($name, $type, $price, $quantity, $conn);
        return $toysId;
    }
}
?>