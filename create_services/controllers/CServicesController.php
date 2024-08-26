<?php
require_once './config/dbconfig.php';
require_once './models/CServicesModel.php';

class ServicesController {
    public function create($name, $description) {
        $db = new DatabaseConnector();
        $conn = $db->connect();
        $services = new Services();
        $servicesId = $services->createServices($name, $description, $conn);
        return $servicesId;
    }
}
?>