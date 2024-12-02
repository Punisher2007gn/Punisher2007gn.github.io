<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina para director</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <div class="button-container">
            <a href="Inicio.php">Inicio</a>
            <a href="eventos.php">Eventos</a>
            <a href="Grupos.php">Grupo</a>
            <a href="#">Perfil</a>
        </div>

        <h2>Horario de Maestros</h2>
        <table>
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>Maestro</th>
                    <th>Grupo</th>
                    <th>Salón</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $horario = [
                    ["hora" => "08:00 - 09:00", "Maestro" => "Valeria Torres", "grupo" => "Grupo 3-A", "salon" => "Salón 101"],
                    ["hora" => "09:00 - 10:00", "Maestro" => "Diego Mendoza", "grupo" => "Grupo 6-C", "salon" => "Salón 102"],
                    ["hora" => "10:00 - 11:00", "Maestro" => "Mateo García", "grupo" => "Grupo 5-B", "salon" => "Salón 103"],
                    ["hora" => "11:00 - 12:00", "Maestro" => "Bruno Vargas", "grupo" => "Grupo 5-C", "salon" => "Salón 104"],
                    ["hora" => "12:00 - 13:00", "Maestro" => "Andrea Castillo", "grupo" => "Grupo 6-A", "salon" => "Salón 105"]
                ];

                foreach ($horario as $clase) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($clase['hora']) . "</td>";
                    echo "<td>" . htmlspecialchars($clase['Maestro']) . "</td>";
                    echo "<td>" . htmlspecialchars($clase['grupo']) . "</td>";
                    echo "<td>" . htmlspecialchars($clase['salon']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Calendario</h2>
        <div id="calendar"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
            });
            calendar.render();
        });
    </script>
</body>
</html>
