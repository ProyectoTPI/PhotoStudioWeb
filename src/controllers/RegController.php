<?php

include '../config/Connection.php';
include '../models/RegModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $dui = $_POST['dui'];
    $email = $_POST['email'];
    $numberphone = $_POST['numberphone'];

    if (empty($name) || empty($lastname) || empty($username) || empty($password) || empty($dui) || empty($email) || empty($numberphone) || empty($password2)) {
        echo "Error en los datos ingresados. Hay campos obligatorios.";
        exit;
    }

    if ($password !== $password2) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $db = new Connection();
    $conn = $db->getConnection();

    $userModel = new RegModel($conn);

    if ($userModel->createUser($username, $hashedPassword, $name, $dui, $lastname, $numberphone, $email)) {
        echo "Successful. ¡Bienvenido!";
    } else {
        echo "Error en el registro. Inténtalo de nuevo.";
    }
}
