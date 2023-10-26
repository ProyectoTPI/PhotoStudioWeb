<?php

require_once("../models/UserModel.php");



if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST["username"];
    $password = $_POST["password"];

    $user_model = new UserModel();
    $re = $user_model->login($user);

    if (!$re) {
        $_SESSION["user_not_found"] = "Usuario no encontrado";
        header("Location: ../views/login.php");
        exit();
    } elseif (password_verify($password, $re["contrasenia"])) {

        $_SESSION["user"] = $user;
        $_SESSION["password"] = $password;
        $_SESSION["user_id"] = $re["usuario_id"];
        header("Location: ../../index.php");
    } else {
        $_SESSION["user_wrong"] = "Credenciales incorrectas";
        header("Location: ../views/login.php");
        exit();
    }


} elseif (!empty($_POST["login"])) {
    echo "Someting went wrong";
}
