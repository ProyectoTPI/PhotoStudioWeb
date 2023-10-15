<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// Sanitize the form values
	$package = $_POST['package'];
	$price = $_POST['price'];

	$package = htmlspecialchars($package, ENT_QUOTES, 'UTF-8');
	$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$price = htmlspecialchars($price, ENT_QUOTES, 'UTF-8');

	// Values greater than 0
	if ($price <= 0){
		echo "<h1> Invalid price </h1>";
		exit;
	}

	// Send data to Paypal API
	$package_data = [
		'package' => $package,
		'price' => $price
	];
} 

?>

<script>
	let package = JSON.parse('<?= json_encode($package_data) ?>')
</script>
<script src="testing.js">
</script>