<?php
// Establecer conexión a la base de datos
$conexion = new mysqli('localhost', 'id21882767_root', 'Central2023*', 'id21882767_pruebaslab');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Determinar el número de resultados por página
$resultados_por_pagina = 1;

// Determinar el número de página actual
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el índice del primer resultado para esta página
$indice_inicio = ($pagina_actual - 1) * $resultados_por_pagina;

// Consulta SQL para obtener una página de resultados
$sql = "SELECT * FROM xyz LIMIT $indice_inicio, $resultados_por_pagina";

// Ejecutar la consulta
$resultado = $conexion->query($sql);

// Comprobar si hay resultados
if ($resultado->num_rows > 0) {
    // Mostrar los resultados
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila['levelType'] . " - Nombre: " . $fila['code'] . "<br>";
    }

    // Calcular el número total de páginas
    $total_resultados = $resultado->num_rows;
    $total_paginas = ceil($total_resultados / $resultados_por_pagina);

    // Mostrar la navegación entre páginas
    echo "<br>";
    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a href='?pagina=$i'>$i</a> ";
    }
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión
$conexion->close();
?>