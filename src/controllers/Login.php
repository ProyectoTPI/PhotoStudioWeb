<?php

session_start();
$conn = mysqli_connect("", "", "", "") or die("Unable to connect");

if (isset($POST["login"])) {
	$user = $POST["username"];
	$password = $POST["password"];

	$query = "select * from usuarios where usuario = $user and contrasenia = $password";
	$rs = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($rs);

	if (is_array($row)) {
		$_SESSION["username"] = $row["usuario"];
		$_SESSION["password"] = $row["contrasenia"];
	} else {
		echo "Error in login";
	}
}
