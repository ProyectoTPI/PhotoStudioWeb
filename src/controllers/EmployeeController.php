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

if (isset($_POST['empleado_id'])) {
    $employeeId = $_POST['empleado_id'];

    $employeeData = $employeeModel->getEmployeeById($employeeId);
    if ($employeeData) {

        $nameEdit = $_POST['nameEdit'];
        $lastnameEdit = $_POST['lastnameEdit'];
        $usernameEdit = $_POST['usernameEdit'];
        $duiEdit = $_POST['duiEdit'];
        $numberphoneEdit = $_POST['numberphoneEdit'];
        $emailEdit = $_POST['emailEdit'];
        $passwordEdit = $_POST['passwordEdit'];

        $updated = $employeeModel->updateEmployee($employeeId, $nameEdit, $lastnameEdit, $usernameEdit, $duiEdit, $numberphoneEdit, $emailEdit, $passwordEdit);

        if ($updated) {
            header('Location: employeeMaintenance.php');
            exit();
        } else {
            $error = "Error al actualizar el empleado.";
        }
    }
}

?>
