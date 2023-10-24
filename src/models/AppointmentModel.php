<?php

require_once("../config/Connection.php");
class AppointmentModel extends Connection
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connection();
        $this->conn = $this->conn->getConnection();
    }

    public function registrarCita($data)
    {
        $query = "INSERT INTO citas (evento, detalle, hora_inicio, hora_fin, cliente_id, paquete_id) 
        VALUES (:evento, :detalle, :hora_inicio, :hora_fin, :cliente_id, :paquete_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':evento', $data['evento'], PDO::PARAM_INT);
        $stmt->bindParam(':detalle', $data['detalle'], PDO::PARAM_INT);
        $stmt->bindParam(':hora_inicio', $data['hora_inicio'], PDO::PARAM_INT);
        $stmt->bindParam(':hora_fin', $data['hora_fin'], PDO::PARAM_INT);
        $stmt->bindParam(':cliente_id', $data['cliente_id'], PDO::PARAM_INT);
        $stmt->bindParam(':paquete_id', $data['paquete_id'], PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
