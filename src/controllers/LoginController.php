<?php
require_once("../models/UserModel.php");
session_start();

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    $user_model = new UserModel();
    $re = $user_model->login($user, $password);

    if ($re) {

        if ($_SESSION['rol'] === 'empleado') {
            header('Location: ../index.php');
            exit;
        } elseif ($_SESSION['rol'] === 'cliente') {
            header('Location: layout.php'); 
            exit;
        }
    } else {
        // Autenticación fallida
        echo "Credenciales incorrectas";
    }
}

