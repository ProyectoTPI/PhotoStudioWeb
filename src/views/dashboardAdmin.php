<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./css/styleDash.css">
</head>

<body>
    <?php include 'home.php'; ?>
    <h1>Panel de Control</h1>

    <div class="chart-container">
        <h2>Distribución de clientes por género</h2>
        <canvas id="clientesPorGenero" width="100" height="100"></canvas>
    </div>

    <div class="chart-container">
        <h2>Precio promedio de paquetes</h2>
        <canvas id="precioPromedioPaquetes" width="100" height="100"></canvas>
    </div>

    <div class="chart-container">
        <h2>Evolución de ventas mensuales</h2>
        <canvas id="graficoLineas" width="100" height="100"></canvas>
    </div>

    <div class="chart-container">
        <h2>Distribución de ingresos por categoría</h2>
        <canvas id="graficoRadar" width="100" height="100"></canvas>
    </div>

    <script>
        // Datos de ejemplo para la distribución de clientes por género
        var datosClientesPorGenero = {
            labels: ["Masculino", "Femenino"],
            datasets: [{
                data: [30, 70],
                backgroundColor: ["blue", "pink"]
            }]
        };

        // Datos de ejemplo para el precio promedio de paquetes
        var datosPrecioPromedioPaquetes = {
            labels: ["Paquete 1", "Paquete 2", "Paquete 3", "Paquete 4"],
            datasets: [{
                data: [100, 80, 120, 90],
                backgroundColor: ["green", "blue", "orange", "red"]
            }]
        };

        // Datos de ejemplo para el gráfico de líneas
        var datosGraficoLineas = {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
            datasets: [{
                label: "Ventas",
                data: [10, 20, 15, 30, 25],
                borderColor: "blue",
                fill: false
            }]
        };

        var datosRadar = {
            labels: ["Paquete bodas", "Paquete 15 años", "Paquete bautizo", "Paquete Graduación", "Paquete moda"],
            datasets: [{
                    label: "Paquete bodas",
                    data: [5, 3, 4, 2, 5],
                    borderColor: "blue",
                    backgroundColor: "rgba(0, 0, 255, 0.2)"
                },
                {
                    label: "Paquete 15 años",
                    data: [4, 2, 5, 4, 3],
                    borderColor: "blue",
                    backgroundColor: "rgba(0, 0, 255, 0.2)"
                },
                {
                    label: "Paquete bautizo",
                    data: [1, 3, 4, 2, 5],
                    borderColor: "green",
                    backgroundColor: "rgba(0, 0, 255, 0.2)"
                },
                {
                    label: "Paquete Graduación",
                    data: [3, 4, 1, 2, 6],
                    borderColor: "pink",
                    backgroundColor: "rgba(0, 0, 255, 0.2)"
                },
                {
                    label: "Paquete moda",
                    data: [7, 3, 4, 5, 0],
                    borderColor: "orange",
                    backgroundColor: "rgba(0, 0, 255, 0.2)"
                }

                
            ]
        };

        var configClientesPorGenero = {
            type: "pie",
            data: datosClientesPorGenero
        };

        var configPrecioPromedioPaquetes = {
            type: "bar",
            data: datosPrecioPromedioPaquetes
        };

        var configGraficoLineas = {
            type: "line",
            data: datosGraficoLineas
        };

        var configRadar = {
            type: "radar",
            data: datosRadar
        };

        var ctxClientesPorGenero = document.getElementById("clientesPorGenero").getContext("2d");
        var chartClientesPorGenero = new Chart(ctxClientesPorGenero, configClientesPorGenero);

        var ctxPrecioPromedioPaquetes = document.getElementById("precioPromedioPaquetes").getContext("2d");
        var chartPrecioPromedioPaquetes = new Chart(ctxPrecioPromedioPaquetes, configPrecioPromedioPaquetes);

        var ctxGraficoLineas = document.getElementById("graficoLineas").getContext("2d");
        var chartGraficoLineas = new Chart(ctxGraficoLineas, configGraficoLineas);

        var ctxRadar = document.getElementById("graficoRadar").getContext("2d");
        var chartRadar = new Chart(ctxRadar, configRadar);
    </script>
</body>

</html>