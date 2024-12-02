<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Futurista - Calendario de Eventos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.css">

    <style>
        
        #calendario {
            width: 100%;
            height: 700px;
            margin: 0 auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <div class="button-container">
            <a href="Inicio.php">Inicio</a>
            <a href="eventos.php">Eventos</a>
            <a href="agregar_evento.php">Agregar más eventos</a>
            <a href="Grupos.php">Grupo</a>
            <a href="#">Perfil</a>
        </div>

        <h2>Calendario de Eventos</h2>
        <div id="calendario"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendario'); 
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es',
                initialView: 'dayGridMonth',
                events: 'fetch_events.php', 
                eventClick: function(info) { 
                    alert('Evento: ' + info.event.title + '\nDescripción: ' + info.event.extendedProps.description + '\nLugar: ' + info.event.extendedProps.location);
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>