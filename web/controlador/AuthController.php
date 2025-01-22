<?php
// app/controllers/AuthController.php

class AuthController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    // Método para procesar el login
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['guest']) && $_POST['guest'] == 'true') {
                // Si es login como invitado
                $_SESSION['user'] = $this->userModel->guestLogin();
                header('Location: templates/login.php');
                exit;
            } 
        }
        include 'templates/login.php';
    }

    // Método para cerrar sesión
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /index.php');
        exit;
    }
}
