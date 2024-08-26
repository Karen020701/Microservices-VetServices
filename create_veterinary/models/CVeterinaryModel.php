<?php
class Veterinary {
    public function createVeterinary($full_name, $specialty, $phone_number, $email, $conn) {
        $stmt = $conn->prepare("INSERT INTO veterinary (full_name, specialty, phone_number, email ) VALUES (?, ?, ?, ?)");
        $stmt->execute([$full_name, $specialty, $phone_number, $email]);
        return $conn->lastInsertId();
    }
}
?>