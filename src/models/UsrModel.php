<?php
require_once("../config/DataBase.php");

class UsrModel
{
    private $conn;

    public function __construct()
    {
        $db = new DataBase();
        $this->conn = $db->getConnection();
    }

    public function login($username)
    {
        $query = "SELECT * FROM users WHERE usr_name = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
}

