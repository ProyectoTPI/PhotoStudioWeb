<?php
session_start();
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

		// $conn = mysqli_connect("", "", "", "") or die("Unable to connect");

		if (isset($_POST["login"])) {
			$user = $_POST["username"];
			$password = $_POST["password"];

			echo "Session iniciada $user $password";

			// $query = "select * from usuarios where usuario = $user and contrasenia = $password";
			// $rs = mysqli_query($conn, $query);
			// $row = mysqli_fetch_array($rs);

			// if (is_array($row)) {
			// 	$_SESSION["username"] = $row["usuario"];
			// 	$_SESSION["password"] = $row["contrasenia"];
			// } else {
			// 	echo "Error in login";
			// }
		} else if (!empty($_POST["login"])) {
			echo "Someting went wrong";
		}

		?>
</body>


</html>