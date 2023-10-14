<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get the form values
	$package = $_POST['package'];
	$price = $_POST['price'];
	// Do something with the form values, like sending an email
	echo "<h1>Package: $package</h1>";
	echo "<h1>Price: $price</h1>";
}
?>
