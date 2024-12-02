<?php

$conn = new mysqli("localhost", "root", "", "escuela_db");

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
