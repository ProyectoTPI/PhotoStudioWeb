<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $client = $_SESSION["user_id"];
    $details = $_POST['transaction'];
    $details = json_decode($details, true);

    // Required for db timestamp structure
    $create_time = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $details['create_time']);
    $create_time_formatted = $create_time->format('Y-m-d H:i:s');

    $transaction_data = [
        'id' => $details['id'],
        'status' => $details['status'],
        'value' => floatval($details['purchase_units']['0']['amount']['value']),
        'creation' => $create_time_formatted,
        'client_paypal_id' => $details['payer']['payer_id'],
        'client_id' => $client
    ];
}

?>

<script>
	let transaction = JSON.parse('<?= json_encode($transaction_data) ?>')
	console.log(transaction)
</script>