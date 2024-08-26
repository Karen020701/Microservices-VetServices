<?php
class Accessory {

    private function executeQuery($conn, $query, $params) {
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

    public function createAccessory($name, $type, $price, $quantity, $conn) {
        $query = "INSERT INTO accessories (name, type, price, quantity) VALUES (?, ?, ?, ?)";
        $this->executeQuery($conn, $query, [$name, $type, $price, $quantity]);
        return $conn->lastInsertId();
    }


}
?>
