<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        nav {
            background-color: #007bff;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<nav>
    <a href="Inicio.php">Inicio</a>
    <a href="Horarios.php">Horarios</a>
    <a href="Grupos.php">Grupos</a>
    <a href="calendario.php">Calendario</a>
</nav>

<div class="container">
    <h2>Horarios</h2>
    <table>
        <thead>
            <tr>
                <th>Hora</th>
                <th>Maestro</th>
                <th>Materia</th>
                <th>Grupo</th>
                <th>Salón</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>08:00 - 09:00</td>
                <td>Prof. Juan Pérez</td>
                <td>Matemáticas</td>
                <td>3-A</td>
                <td>101</td>
            </tr>
            <tr>
                <td>09:00 - 10:00</td>
                <td>Prof. María García</td>
                <td>Física</td>
                <td>6-C</td>
                <td>102</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
