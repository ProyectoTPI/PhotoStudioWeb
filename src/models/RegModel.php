<?php
$db = new Connection();
$conn = $db->getConnection();

class RegModel
{
    private $connection;

    public function __construct($db)
    {
        $this->connection = $db;
    }

    public function createUser($username, $password, $name, $dui, $lastname, $numberphone, $email)
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
