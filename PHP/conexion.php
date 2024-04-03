<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pruebas";

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
