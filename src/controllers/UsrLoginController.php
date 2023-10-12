<?php
session_start();
require_once("../models/UsrModel.php");

class UsrLoginController
{
    public function showLoginForm()
    {
        
        include("../views/login_form.php");
    }

    public function processLogin()
    {
        if (isset($_POST["login"])) {
            $user = $_POST["username"];
            $password = $_POST["password"];

            $usr_model = new UsrModel(); 
            $re = $usr_model->login($user); 

            if (!$re) {
                echo "Usuario no encontrado";
            } elseif (password_verify($password, $re["usr_password"])) {
                $_SESSION["user"] = $user;
                echo "Inicio OK: " . $_SESSION["user"];
            } else {
                echo "Pass incorrecto";
            }
        } else {
            echo "falla en login";
        }
    }
}

$controller = new UsrLoginController();

if (isset($_POST["login"])) {
    $controller->processLogin();
} else {
    $controller->showLoginForm();
}

