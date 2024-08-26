<?php
class Services {
    public function createServices($name, $description, $conn) {
        $stmt = $conn->prepare("INSERT INTO services (name, description) VALUES (?, ?)");
        $stmt->execute([$name, $description]);
        return $conn->lastInsertId();
    }
}
?>