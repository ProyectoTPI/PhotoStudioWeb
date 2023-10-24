<?php

include '../config/Connection.php';
require_once '..models/AppointmentController.php';

class AppointmentController
{
    public function registrarCita()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'evento' => $_POST['nameevent'],
                'detalle' => $_POST['eventdetail'],
                'hora_inicio' => $_POST['date'] . ' ' . $_POST['starttime'],
                'hora_fin' => $_POST['date'] . ' ' . $_POST['endtime'],
                'cliente_id' => $_POST['idclient'],
                'paquete_id' => $_POST['idpackage']
            ];

            $model = new AppointmentModel();
            $result = $model->registrarCita($data);

            if ($result) {
                echo "Cita registrada exitosamente";
                //header('Location: success.php');
            } else {
                echo "Error al registrar la cita";
                //header('Location: error.php');
            }
        }
    }
}

$controller = new AppointmentController();
$controller->registrarCita();
