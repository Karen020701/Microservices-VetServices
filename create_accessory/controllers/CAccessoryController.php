<?php
require_once './config/dbconfig.php';
require_once './models/CAccessoryModel.php';

class AccessoryController {
    private $conn;

    public function __construct() {
        $this->conn = $this->getConnection();
    }

    private function getConnection() {
        $db = new DatabaseConnector();
        return $db->connect();
    }

    public function create($name, $type, $price, $quantity) {
        $accessory = new Accessory();
        $accessoryId = $accessory->createAccessory($name, $type, $price, $quantity, $this->conn);
        return $accessoryId;
    }

}
?>
