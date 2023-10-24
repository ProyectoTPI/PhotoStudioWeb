<?php

session_start();
require_once("../models/TransactionModel.php");

$db = new Connection();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = $_SESSION["user_id"];
    $details = $_POST['transaction'];
    $details = json_decode($details, true);

    // Obtainer client_id using user_id
    $clientSelectSQL = "SELECT * FROM clientes
    INNER JOIN usuarios ON clientes.usuario_id = usuarios.usuario_id where usuarios.usuario_id = :user";

    $stmtClient = $conn->prepare($clientSelectSQL);
    $stmtClient->bindParam(':user', $user, PDO::PARAM_INT);
    $stmtClient->execute();
    $client = $stmtClient->fetch(PDO::FETCH_ASSOC);

    // Required for db timestamp structure
    $create_time = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $details['create_time']);
    $create_time_formatted = $create_time->format('Y-m-d H:i:s');

    $transaction_data = [
        'id' => $details['id'],
        'status' => $details['status'],
        'value' => floatval($details['purchase_units']['0']['amount']['value']),
        'creation' => $create_time_formatted,
        'client_paypal_id' => $details['payer']['payer_id'],
        'client_id' => $client["cliente_id"]
    ];

    // Store transaction in db
    $transaction_model = new TransactionModel();
    $re = $transaction_model->register($transaction_data);

    if (!$re) {
        echo "Error en el registro. Inténtalo de nuevo.";
    }

    echo "Successful. ¡Registro almacenado!";
    header("Location: ../views/ResumenCompras.php");

}
