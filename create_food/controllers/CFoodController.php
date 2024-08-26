<?php
require_once './config/dbconfig.php';
require_once './models/CFoodModel.php';

class FoodController {
    public function create($descrip, $type, $price, $quantity) {
        $conn = (new DatabaseConnector())->connect();
        $food = new Food();
        return $food->createFood($descrip, $type, $price, $quantity, $conn);
    }
}
?>
