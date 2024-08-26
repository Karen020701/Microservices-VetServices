<?php
require_once './config/dbconfig.php';
require_once './models/CMedicinesModel.php';

class MedicinesController {
    public function create($name, $usage, $price, $quantity) {
        $conn = (new DatabaseConnector())->connect();
        return (new Medicines())->createMedicines($name, $usage, $price, $quantity, $conn);
    }
}
?>
