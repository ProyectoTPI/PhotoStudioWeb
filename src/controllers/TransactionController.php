<?php

session_start();
require_once("../models/TransactionModel.php");

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

    $transaction_model = new TransactionModel();
    $re = $transaction_model->register($transaction_data);

    if (!$re){
        echo "Error en el registro. Inténtalo de nuevo.";
    }

    echo "Successful. ¡Registro almacenado!";
    header("Location: ../../index.php");

}

?>

<script>
	let transaction = JSON.parse('<?= json_encode($transaction_data) ?>')
	console.log(transaction)
</script>