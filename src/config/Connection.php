<?php

$envFilePath = __DIR__ . '/../../.env';

if (file_exists($envFilePath)) {
    $envVars = parse_ini_file($envFilePath);
    foreach ($envVars as $key => $value) {
        putenv("$key=$value");
    }
}

class Connection
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct()
    {
        $this->host = getenv("HOST");
        $this->username = getenv("USERNAME");
        $this->password = getenv("PASSWORD");
        $this->database = getenv("DATABASE");

        $connection_string = "mysql:host=$this->host;dbname=$this->database;charset=utf8";
        try {
            $this->conn = new PDO($connection_string, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión a la base de datos: " . $e->getMessage();
            die();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}






