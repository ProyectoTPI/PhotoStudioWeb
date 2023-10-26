<?php
class RegModel
{
    private $connection;

    public function __construct($db)
    {
        $this->connection = $db;
    }

    public function createClient($username, $password, $name, $dui, $lastname, $numberphone, $email, $rol)
    {
        if ($this->connection === null) {
            return false; 
        }

        $userInsertSQL = "INSERT INTO usuarios (usuario, contrasenia, fecha_creacion, rol) VALUES (:username, :password, NOW(), :rol)";
        $stmtUser = $this->connection->prepare($userInsertSQL);
        $stmtUser->bindParam(':username', $username, PDO::PARAM_STR);
        $stmtUser->bindParam(':password', $password, PDO::PARAM_STR);
        $stmtUser->bindParam(':rol', $rol, PDO::PARAM_STR);

        if ($stmtUser->execute()) {
            $userId = $this->connection->lastInsertId();

            $clientInsertSQL = "INSERT INTO clientes (dui, nombre, apellido, email, telefono, usuario_id) VALUES (:dui, :name, :lastname, :email, :numberphone, :userId)";
            $stmtClient = $this->connection->prepare($clientInsertSQL);
            $stmtClient->bindParam(':dui', $dui, PDO::PARAM_STR);
            $stmtClient->bindParam(':name', $name, PDO::PARAM_STR);
            $stmtClient->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $stmtClient->bindParam(':email', $email, PDO::PARAM_STR);
            $stmtClient->bindParam(':numberphone', $numberphone, PDO::PARAM_STR);
            $stmtClient->bindParam(':userId', $userId, PDO::PARAM_INT);

            if ($stmtClient->execute()) {
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
