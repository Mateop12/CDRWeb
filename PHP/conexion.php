<?php
$servername = "localhost";
$username = "id21882767_root";
$password = "Central2023*";
$database = "id21882767_pruebaslab";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener datos
$sql = "SELECT * FROM xyz";
$resultado = $conn->query($sql);

// Cerrar conexión
$conn->close();
?>
