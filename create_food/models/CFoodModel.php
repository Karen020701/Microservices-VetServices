<?php
class Food {
    public function createFood($descrip, $type, $price, $quantity, $conn) {
        $stmt = $conn->prepare("INSERT INTO food (descrip, type, price, quantity) VALUES (?, ?, ?, ?)");
        $stmt->execute([$descrip, $type, $price, $quantity]);
        return $conn->lastInsertId();
    }
}
?>
