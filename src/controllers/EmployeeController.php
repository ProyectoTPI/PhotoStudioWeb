<?php
require_once("../models/EmployeeModel.php");

$employeeModel = new EmployeeModel();
$employees = $employeeModel->getEmployees();

if (isset($_POST['eliminarEmpleado'])) {
    $employeeId = $_POST['empleado_id'];
    if ($employeeModel->deleteEmployee($employeeId)) {

        header('Location: employeeMaintenance.php'); 
        exit();
    } else {
        $error = "Error al eliminar el empleado.";
    }
}
?>

