<?php
require_once './config/dbconfig.php';
require_once './models/CUserModel.php';

class UserController {
    public function create($email, $password, $full_name, $role) {
        $db = new DatabaseConnector();
        $conn = $db->connect();
        $user = new User();
        $userId = $user->createUser($email, $password, $full_name, $role, $conn);
        return $userId;
    }
}
?>