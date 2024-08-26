<?php
class Toys {
    public function createToys($name, $type, $price, $quantity, $conn) {
        $stmt = $conn->prepare("INSERT INTO toys (name, type, price, quantity) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $type, $price, $quantity]);
        return $conn->lastInsertId();
    }
}
?>