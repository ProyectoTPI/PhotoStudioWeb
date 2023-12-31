<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'empleado') {
    header('Location: pagina_de_error.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:PHOTOSTUDIOWEB - HOME:.</title>
    <link rel="stylesheet" href="./css/styleHome.css">
    <link rel="stylesheet" href="./css/styleEmployee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>
    <button id="toggleSidebarButton" class="labelBotonMenu">Toggle</button>
    <div id="divTitle">
        <div id="avatarContainer">
            <img src="./IMG/avatar.png" alt="avatar">
        </div>
    </div>
    <section class="sidebar">
        <header>
            <div class="logo"><img src="./IMG/logo2.png" alt="logo"></div>
            <div class="titulo">ROYALE</div>
            <label for="toggleSidebarButton" class="labelBotonMenu">
                <i class="fa fa-navicon" id="btnMostrar"></i>
            </label>
        </header>
        <ul>
            <li><a href="ResumenCompras.php"><i class="fa fa-home"></i>Inicio</a></li>
            <li><a href="indentity.php"><i class="fa fa-diamond"></i>Identidad</a></li>
            <li><a href="booking.php"><i class="fa fa-calendar"></i>Agenda</a></li>
            <li><a href="employeeMaintenance.php"><i class="fa fa-user"></i>Empleados</a></li>
            <li><a href="directory.php"><i class="fa fa-address-book-o"></i>Directorio telefónico</a></li>
            <li><a href="dashboardAdmin.php"><i class="fa fa-bar-chart"></i>Dashboard</a></li>

        </ul>
    </section>

    <script src="./js/drawerHome.js"></script>
    <script src="./js/drawerClose.js"></script>
</body>

</html>