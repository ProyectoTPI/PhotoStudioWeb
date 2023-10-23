<?php
session_start();
include '../models/CarritoModel.php';
$op=$_REQUEST['op'];


    
     switch($op){
        case 1:
    unset($_SESSION['lista']);
    $objMetodo=new CarritoModel();
    $lista=$objMetodo->listarPaquetes();
    $_SESSION['lista']=$lista;
    header("Location: ../views/ResumenCompras.php");

    break;
        }

?>