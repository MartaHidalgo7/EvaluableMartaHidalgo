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

    if ($action == 'login') {
        $authController->login();
    } elseif ($action == 'logout') {
        $authController->logout();
    } else {
        echo "Acción no válida.";
    }
} else {
    include 'templates/login.php';
}