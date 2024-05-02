<?php
session_start(); // Iniciar la sesión

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Almacenar los datos en la caché de sesión
    $_SESSION['formulario_contacto'] = [
        'nombre' => $nombre,
        'asunto' => $asunto,
        'mensaje' => $mensaje
    ];

    // Redirigir al usuario a otra página (opcional)
    header("Location: gracias.php");
    exit(); // Finalizar la ejecución del script
}
?>
