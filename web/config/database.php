<?php
// config/database.php

$host = 'localhost';
$dbname = 'perrera';
$username = 'root';  // Cambia si tu usuario de base de datos es otro
$password = '';  // Cambia si tienes contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}