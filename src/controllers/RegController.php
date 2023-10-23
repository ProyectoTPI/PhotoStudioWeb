<?php
include '../config/Connection.php';
include '../models/RegModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dui = $_POST['dui'];
    $email = $_POST['email'];
    $numberphone = $_POST['numberphone'];

    $rol = 'cliente';

    if (empty($name) || empty($lastname) || empty($username) || empty($password) || empty($dui) || empty($email) || empty($numberphone)) {
        echo "Error en los datos ingresados. Hay campos obligatorios.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $db = new Connection();
    $conn = $db->getConnection();

    $clientModel = new RegModel($conn);

    if ($clientModel->createClient($username, $hashedPassword, $name, $dui, $lastname, $numberphone, $email, $rol)) {
        echo "Cliente registrado exitosamente.";
    } else {
        echo "Error en el registro del cliente. Inténtalo de nuevo.";
    }
}
?>
