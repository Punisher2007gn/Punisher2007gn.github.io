<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas de Aprobados y Reprobados</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles6.css">
</head>
<body>

<nav>
    <a href="Inicio.php">Inicio</a>
    <a href="Aprobados.php">Aprobados/Reprobados</a>
    <a href="Graficas.php">Faltas en Septiembre</a>
</nav>

<div class="container">
    <h2>Gráfica de Aprobados y Reprobados</h2>
    <canvas id="myChart"></canvas>
</div>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Aprobados', 'Reprobados'],
            datasets: [{
                label: 'Estudiantes',
                data: [80, 20],
                backgroundColor: ['#4CAF50', '#F44336'],
                borderColor: ['#388E3C', '#D32F2F'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#e0e0e0'
                    }
                },
                title: {
                    display: true,
                    text: 'Porcentaje de Aprobados y Reprobados',
                    color: '#e0e0e0'
                }
            }
        }
    });
</script>

</body>
</html>