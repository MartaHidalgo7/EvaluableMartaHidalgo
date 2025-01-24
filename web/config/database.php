<?php
// config/database.php

class Database {
    private $host = 'localhost';
    private $dbname = 'perrera';
    private $username = 'root';
    private $password = '';
    private $pdo;

    public function connect() {
        if ($this->pdo === null) { // Solo conecta si no existe conexión aún
            try {
                $this->pdo = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname}",
                    $this->username,
                    $this->password
                );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return $this->pdo;
    }
}