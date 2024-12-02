<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Evento</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <div class="form-container">
        <h1>Agregar Nuevo Evento</h1>

        <?php if (isset($mensaje)): ?>
            <p><?php echo $mensaje; ?></p>
        <?php endif; ?>


        <form action="procesar_evento.php" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora">

            <label for="lugar">Lugar:</label>
            <input type="text" id="lugar" name="lugar" required>

            <button type="submit">Guardar Evento</button>
        </form>
    </div>
</body>
</html>


