<?php
class User {
    public function createUser($email, $password, $full_name, $role, $conn) {
        $stmt = $conn->prepare("INSERT INTO users_inf (email, password, full_name, role) VALUES (?, ?, ?, ?)");
        $stmt->execute([$email, $password, $full_name, $role]);
        return $conn->lastInsertId();
    }
}
?>