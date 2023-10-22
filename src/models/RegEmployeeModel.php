<?php
$db = new Connection();
$conn = $db->getConnection();

class RegEmployeeModel
{
    private $connection;

    public function __construct($db)
    {
        $this->connection = $db;
    }

    public function createEmployee($dui, $name, $lastname, $email, $numberphone, $username, $password)
    {
        if ($this->connection === null) {
            return false;
        }

        $userInsertSQL = "INSERT INTO usuarios (usuario, contrasenia, fecha_creacion) VALUES (:username, :password, NOW())";
        $stmtUser = $this->connection->prepare($userInsertSQL);
        $stmtUser->bindParam(':username', $username, PDO::PARAM_STR);
        $stmtUser->bindParam(':password', $password, PDO::PARAM_STR);

        if ($stmtUser->execute()) {
            $userId = $this->connection->lastInsertId();

            $employeeInsertSQL = "INSERT INTO empleados (dui, nombre, apellido, email, telefono, usuario_id) VALUES (:dui, :name, :lastname, :email, :numberphone, :userId)";
            $stmtEmployee = $this->connection->prepare($employeeInsertSQL);
            $stmtEmployee->bindParam(':dui', $dui, PDO::PARAM_STR);
            $stmtEmployee->bindParam(':name', $name, PDO::PARAM_STR);
            $stmtEmployee->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $stmtEmployee->bindParam(':email', $email, PDO::PARAM_STR);
            $stmtEmployee->bindParam(':numberphone', $numberphone, PDO::PARAM_STR);
            $stmtEmployee->bindParam(':userId', $userId, PDO::PARAM_INT);

            if ($stmtEmployee->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
?>
