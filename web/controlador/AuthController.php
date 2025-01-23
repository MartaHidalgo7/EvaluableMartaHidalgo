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

                setcookie('guest_session', 'true', time() + 3600, "/", "", false, true); // Cookie para 1 hora
    
                // Crear una sesión para el invitado, dependiendo de cómo manejes los usuarios
                $_SESSION['user'] = 'guest'; 
                // Redirigir a una página después de iniciar sesión como invitado
                header('Location: templates/guest.php');
                exit;
            } 
            if (isset($_POST['user']) && $_POST['user'] == 'true') {

                setcookie('user_session', 'true', time() + 3600, "/", "", false, true); // Cookie para 1 hora
    
                // Crear una sesión para el user, dependiendo de cómo manejes los usuarios
                $_SESSION['user'] = 'user'; 
                // Redirigir a una página después de iniciar sesión como user
                header('Location: templates/userMain.php');
                exit;
            } 
            if (isset($_POST['admin']) && $_POST['admin'] == 'true') {

                setcookie('admin_session', 'true', time() + 3600, "/", "", false, true); // Cookie para 1 hora
    
                // Crear una sesión para el admin, dependiendo de cómo manejes los usuarios
                $_SESSION['admin'] = 'admin'; 
                // Redirigir a una página después de iniciar sesión como admin
                header('Location: templates/adminMain.php');
                exit;
            } 
        }
    
        // Incluir la página de login si no es un POST
        include 'templates/login.php';
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        // Eliminar cualquier cookie relacionada con la sesión de invitado si la existe
        setcookie('guest_session', '', time() - 3600, "/"); // Eliminar la cookie del invitado si está configurada
        
        header('Location: index.php'); // Redirigir al usuario al inicio
        exit;
    }

    public function logoutUser() {
        session_start();
        session_unset();
        session_destroy();
        // Eliminar cualquier cookie relacionada con la sesión de invitado si la existe
        setcookie('user_session', '', time() - 3600, "/"); // Eliminar la cookie del invitado si está configurada
        
        header('Location: index.php'); // Redirigir al usuario al inicio
        exit;
    }
    public function logoutAdmin() {
        session_start();
        session_unset();
        session_destroy();
        // Eliminar cualquier cookie relacionada con la sesión de invitado si la existe
        setcookie('admin_session', '', time() - 3600, "/"); // Eliminar la cookie del invitado si está configurada
        
        header('Location: index.php'); // Redirigir al usuario al inicio
        exit;
    }
}
