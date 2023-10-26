<?php

require_once("../config/Connection.php");

class UserModel extends Connection
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connection();
        $this->conn = $this->conn->getConnection();
    }

    public function login($username, $password)
    {
        $query = "SELECT usuario_id, contrasenia, rol FROM usuarios WHERE usuario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username]);

        if ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($password, $user['contrasenia'])) {

                $_SESSION['usuario_id'] = $user['usuario_id'];

                if ($user['rol'] === 'empleado') {
                    $_SESSION['rol'] = 'empleado';
                    header('Location: /src/views/home.php');
                    exit;
                } elseif ($user['rol'] === 'cliente') {
                    $_SESSION['rol'] = 'cliente';
                    header('Location: /index.php');
                    exit;
                }
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "Usuario no encontrado";
        }
    }
}
