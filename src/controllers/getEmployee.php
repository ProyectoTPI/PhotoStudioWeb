<?php

require_once("../models/EmployeeModel.php");

if (isset($_GET['employee_id'])) {
    $employeeId = $_GET['employee_id'];
    $employeeModel = new EmployeeModel();
    $employeeData = $employeeModel->getEmployeeById($employeeId);
    if ($employeeData) {
        header('Content-Type: application/json');
        echo json_encode($employeeData);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Empleado no encontrado"));
    }
} else {
    http_response_code(400);
    echo json_encode(array("message" => "ID de empleado no válido"));
}
