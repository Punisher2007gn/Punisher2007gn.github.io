<?php
include 'conexion.php';


$result = $conn->query("SELECT titulo, descripcion, fecha, hora, lugar FROM eventos ORDER BY fecha ASC");

$eventos = [];

while ($row = $result->fetch_assoc()) {
    $eventos[] = [
        'title' => $row['titulo'],
        'start' => $row['fecha'] . 'T' . $row['hora'], 
        'description' => $row['descripcion'],
        'location' => $row['lugar']
    ];
}


$conn->close();


header('Content-Type: application/json');
echo json_encode($eventos);
?>
