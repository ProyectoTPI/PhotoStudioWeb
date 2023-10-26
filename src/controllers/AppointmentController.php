<?php
include '../config/Connection.php';
include '../views/AppointmentRegistration.php';

// Verificar si se ha enviado el formulario
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente_id = $_POST['idclient'];
    $paquete_id = $_POST['idpackage'];
    $empleado_id = $_POST['idemployee'];
    $nameevent = $_POST['nameevent'];
    $eventdetail = $_POST['eventdetail'];
    $date = $_POST['date'];
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];

    // Consulta para obtener la información del cliente
    $client_query = "SELECT nombre, apellido, telefono, email FROM clientes WHERE cliente_id = $cliente_id";
    $client_result = $conn->query($client_query);
    $client_data = $client_result->fetch_assoc();

    // Consulta para obtener información del paquete
    $package_query = "SELECT * FROM paquetes WHERE paquete_id = $paquete_id";
    $package_result = $conn->query($package_query);
    $package_data = $package_result->fetch_assoc();

    // Consulta para obtener la información del empleado
    $queryEmpleado = "SELECT nombre, apellido FROM empleados WHERE empleado_id = $empleado_id";
    $resultEmpleado = $mysqli->query($queryEmpleado);
    $empleadoData = $resultEmpleado->fetch_assoc();
    

    // Insertar la cita en la base de datos
    $sql = "INSERT INTO citas (evento, detalle, hora_inicio, hora_fin, cliente_id, paquete_id) 
            VALUES ('$nameevent', '$eventdetail', '$date $starttime', '$date $endtime', $cliente_id, $paquete_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Cita registrada con éxito";
    } else {
        echo "Error al registrar la cita: " . $conn->error;
    }
}
// Cerrar la conexión a la base de datos
$conn->close();
?>