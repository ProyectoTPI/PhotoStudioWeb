<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:PHOTOSTUDIOWEB - HOME:.</title>
    <link rel="stylesheet" href="./css/styleHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <button id="toggleSidebarButton" class="labelBotonMenu">Toggle Sidebar</button>
    <section class="sidebar">
        <header>
            <div class="logo"><img src="./IMG/logo2.png" alt="logo"></div>
            <div class="titulo">Photo Studio</div>
            <label for="toggleSidebarButton" class="labelBotonMenu">
                <i class="fa fa-navicon" id="btnMostrar"></i>
            </label>
        </header>
        <ul>
            <li><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li><a href="#"><i class="fa fa-diamond"></i>Identidad empresarial</a></li>
            <li><a href="#"><i class="fa fa-calendar"></i>Agenda</a></li>
            <li><a href="#"><i class="fa fa-user"></i>Empleados</a></li>
            <li><a href="#"><i class="fa fa-address-book-o"></i>Directorio telefónico</a></li>
            <li><a href="#"><i class="fa fa-bar-chart"></i>Dashboard</a></li>
            <li><a href="#"><i class="fa fa-info-circle"></i>Sobre nosotros</a></li>
        </ul>
    </section>

    <section class="container">
                  <!-- Aquie renderizaremos los componentes que queramos -->
    </section>

    <script>
        const btnMostrar = document.getElementById("btnMostrar");
        const sidebar = document.querySelector(".sidebar");
        const toggleSidebarButton = document.getElementById("toggleSidebarButton");
        let sidebarVisible = true;
        function toggleSidebar() {
            const sidebarWidth = 300;
            if (sidebarVisible) {
                sidebar.style.left = `-${sidebarWidth}px`;
                toggleSidebarButton.style.transform = "translateX(0)";
                sidebarVisible = false;
            } else {
                sidebar.style.left = "0";
                toggleSidebarButton.style.transform = "translateX(300px)";
                sidebarVisible = true;
            }
        }
        toggleSidebarButton.addEventListener("click", toggleSidebar);
    </script>
</body>
</html>