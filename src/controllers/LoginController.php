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

	<form method="post" action="#">
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit" name="login" value="Login">

		<?php


		if (isset($_POST["login"])) {
			$user = $_POST["username"];
			$password = $_POST["password"];

			$user_model = new UserModel();
			$re = $user_model->login($user);

			if (!$re) {
				echo "User not found";
			} else if (password_verify($password, $re["contrasenia"])) {

				$_SESSION["user"] = $user;
				$_SESSION["password"] = $password;

				echo "Session iniciada";
			} else {
				echo "User wrong";
			}
		} else if (!empty($_POST["login"])) {
			echo "Someting went wrong";
		}

		?>
</body>


</html>