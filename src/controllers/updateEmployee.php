<?php
require_once("../models/EmployeeModel.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $employeeId = $_POST['employee_id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $dui = $_POST['dui'];
    $numberphone = $_POST['numberphone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $employeeModel = new EmployeeModel();


    $success = $employeeModel->updateEmployee($employeeId, $name, $lastname, $username, $dui, $numberphone, $email, $password);

    if ($success) {

        echo json_encode(array("success" => true));
    } else {

        echo json_encode(array("success" => false, "error" => "No se pudo actualizar el empleado"));
    }
} else {

    echo json_encode(array("success" => false, "error" => "Método no permitido"));
}
