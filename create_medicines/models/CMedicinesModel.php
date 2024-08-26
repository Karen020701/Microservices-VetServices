<?php
class Medicines {
    public function createMedicines($name, $usage, $price, $quantity, $conn) {
        $stmt = $conn->prepare("INSERT INTO medicines (name, usage, price, quantity) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $usage, $price, $quantity]);
        return $conn->lastInsertId();
    }
}
?>
