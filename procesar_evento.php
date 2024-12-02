<?php
include 'conexion.php';

$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['titulo'], $_POST['descripcion'], $_POST['fecha'], $_POST['hora'], $_POST['lugar'])) {
        $stmt = $conn->prepare("INSERT INTO eventos (titulo, descripcion, fecha, hora, lugar) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $_POST['titulo'], $_POST['descripcion'], $_POST['fecha'], $_POST['hora'], $_POST['lugar']);
        

        $mensaje = $stmt->execute() ? "Evento agregado correctamente" : "Error: " . $conn->error;
        $stmt->close();
    } else {
        $mensaje = "Por favor, complete todos los campos.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Evento</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <div class="container">
        <h1>Agregar Evento</h1>
        
        <?php if (isset($mensaje) && $mensaje): ?>
            <div class="mensaje"><?php echo $mensaje; ?></div>
        <?php endif; ?>
        
        <form method="post">
            <input type="text" name="titulo" placeholder="Título" required>
            <textarea name="descripcion" placeholder="Descripción" required></textarea>
            <input type="date" name="fecha" required>
            <input type="time" name="hora" required>
            <input type="text" name="lugar" placeholder="Lugar" required>
            <button type="submit">Guardar Evento</button>
        </form>
        
        <a href="eventos.php" class="boton-volver">Ver Eventos</a>
    </div>
</body>
</html>