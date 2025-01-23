<?php
// app/models/User.php

class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Función para verificar si el usuario existe
    public function verifyUser($username, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute(['username' => $username, 'password' => $password]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function guestLogin() {
        return ['username' => 'Invitado', 'role' => 'guest'];
    }
    public function userLogin() {
    return ['username' => 'Invitado', 'role' => 'user'];
    }

    public function userAdmin() {
        return ['username' => 'Invitado', 'role' => 'admin'];
        }
}