<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales/es.js"></script>
    <link rel="stylesheet" href="./css/styleHome.css">
    <title>.:PHOTOSTUDIOWEB - CITAS:.</title>
</head>

<body>
    <?php include 'home.php'; ?>
    <div class="container divBooking">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-4 ">
                <h2>Calendario de citas</h2>
                <div id="calendario" class="calendario"></div>
            </div>
        </div>
    </div>

    
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendario');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'es',
            initialView: 'dayGridMonth',
            events: [{
                    title: 'Evento 1',
                    start: '2023-10-15'
                },
                {
                    title: 'Evento 2',
                    start: '2023-10-20'
                },
                {
                    title: 'tEST',
                    start: '2023-10-22'
                }
            ]
        });
        calendar.render();

        calendar.updateSize();

    });
</script>

</html>