<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// Sanitize the form values
	// $package = $_POST['name'];
	// $price = $_POST['price'];
	// $price = $_POST['concept'];
	$details = $_POST['transaction'];

	$details = json_decode($details, true);
	$package = htmlspecialchars($package, ENT_QUOTES, 'UTF-8');
	$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$price = htmlspecialchars($price, ENT_QUOTES, 'UTF-8');

	if ($price <= 0) {
		echo "<h1> Invalid price </h1>";
		exit;
	}

	// Required for db timestamp structure
	$create_time = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $details['create_time']);
	$create_time_formatted = $create_time->format('Y-m-d H:i:s');

	$transaction_data = [
		'id' => $details['id'],
		'status' => $details['status'],
		'value' => floatval($details['purchase_units']['0']['amount']['value']),
		'creation' => $create_time_formatted,
		'client_paypal_id' => $details['payer']['payer_id'],
	];
}

?>

<script>
	let transaction = JSON.parse('<?= json_encode($transaction_data) ?>')
</script>
<script src="testing.js">
</script>