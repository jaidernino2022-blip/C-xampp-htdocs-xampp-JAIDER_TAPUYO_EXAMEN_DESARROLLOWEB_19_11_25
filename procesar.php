<?php
// Validar recepción de datos
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$clave = $_POST['clave'] ?? '';

// Mostrar datos en tabla
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Registrados</title>
    <!-- Enlazamos la misma hoja de estilos que el formulario -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para la tabla de resultados */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
    </style>
</head>
<body>

<!-- Usamos la clase 'contenedor' de style.css para centrar y dar estilo al recuadro -->
<div class="contenedor">
    <h2>Datos del Usuario Registrado</h2>

    <table>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo htmlspecialchars($nombre); ?></td>
        </tr>
        <tr>
            <td>Correo</td>
            <td><?php echo htmlspecialchars($correo); ?></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><?php echo "********"; // Por seguridad, no mostramos la contraseña ?></td>
        </tr>
    </table>

    <!-- Botón para volver al formulario, usando la clase de style.css -->
    <a href="indexold.html" class="btn-home">Volver al Formulario</a>

    <!-- Botón para regresar a la aplicación principal -->
    <a href="index.html" class="btn-home">Volver al Inicio</a>

</body>
</html>
