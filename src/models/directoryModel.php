<?php

require_once("../config/Connection.php");

class DirectoryModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connection();
        $this->conn = $this->conn->getConnection();
    }

    public function getEmployees()
    {
        try {
            $query = "SELECT * FROM empleados";
            $stmt = $this->conn->prepare($query);

            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }



    public function getEmployeeById($employeeId)
    {
        try {
            $query = "SELECT e.*, u.usuario 
                  FROM empleados e
                  JOIN usuarios u ON e.usuario_id = u.usuario_id
                  WHERE e.empleado_id = :employeeId";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':employeeId', $employeeId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function updateEmployee($employeeId, $name, $lastname, $username, $dui, $numberphone, $email, $password)
    {
        try {
            $query = "UPDATE empleados 
                  SET nombre = :name, apellido = :lastname, usuario = :username, dui = :dui, telefono = :numberphone, email = :email, contrasenia = :password 
                  WHERE empleado_id = :employeeId";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':dui', $dui, PDO::PARAM_STR);
            $stmt->bindParam(':numberphone', $numberphone, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':employeeId', $employeeId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }


}
