<?php

require_once("../config/Connection.php");

class CarritoModel
{
    private $conn;
    public function listarPaquetes()
    {
        $cnx = new Connection();
        $cn = $cnx->getConnection();
        $res = $cn->prepare("SELECT * FROM paquetes");
        $res->execute();
        foreach($res as $row) {
            $lista[] = $row;
        }
        return $lista;
    }

}
