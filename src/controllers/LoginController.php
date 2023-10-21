<?php
session_start();
require_once("../models/UserModel.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

		<?php


        if (isset($_POST["login"])) {
            $user = $_POST["username"];
            $password = $_POST["password"];

            $user_model = new UserModel();
            $re = $user_model->login($user);

            if (!$re) {
                echo "User not found";
            } elseif (password_verify($password, $re["contrasenia"])) {

                $_SESSION["user"] = $user;
                $_SESSION["password"] = $password;
                $_SESSION["user_id"] = $re["usuario_id"];


                header("Location: ../../index.php");
            } else {
                echo "User wrong";
            }
        } elseif (!empty($_POST["login"])) {
            echo "Someting went wrong";
        }

?>
</body>


</html>