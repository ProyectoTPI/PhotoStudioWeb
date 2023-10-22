<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales/es.js"></script> 

</head>

<body>
    <div id="calendario"></div>

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
    });
</script>

</html>