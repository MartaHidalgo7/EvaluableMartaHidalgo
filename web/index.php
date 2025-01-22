<?php
// public/index.php

session_start();
require_once 'config/database.php';
require_once 'modelo/User.php';
require_once 'controlador/AuthController.php';

$userModel = new User($pdo);
$authController = new AuthController($userModel);

// Enrutamiento
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Verificar la acción de login
    if ($action == 'login') {
        $authController->login();
    
    // Verificar la acción de logout
    } elseif ($action == 'logout') {
        $authController->logout();
    
    // Acción no válida
    } else {
        echo "Acción no válida.";
    }
} else {
    // Si no se ha definido ninguna acción, mostrar el login por defecto
    include 'templates/login.php';
}