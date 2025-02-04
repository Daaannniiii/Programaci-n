<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $plan = $_POST['plan'];
    $paquetes = isset($_POST['paquetes']) ? $_POST['paquetes'] : [];
    $duracion = $_POST['duracion'];

    // Validación para usuarios menores de 18 años
    if ($edad < 18 && !in_array('Infantil', $paquetes)) {
        echo "Los usuarios menores de 18 años solo pueden contratar el Pack Infantil.";
        exit;
    }

    // Validación para usuarios del Plan Básico (solo un paquete adicional)
    if ($plan == 'Basico' && count($paquetes) > 1) {
        echo "El Plan Básico solo permite seleccionar un paquete adicional.";
        exit;
    }

    // Validación para el Pack Deporte (solo disponible con suscripción anual)
    if (in_array('Deporte', $paquetes) && $duracion != 'Anual') {
        echo "El Pack Deporte solo puede ser contratado con una suscripción anual.";
        exit;
    }

    // Validación del correo electrónico (debe ser único)
    $query = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE correo = ?");
    $query->execute([$correo]);
    $existeCorreo = $query->fetchColumn();

    if ($existeCorreo > 0) {
        echo "El correo electrónico ya está registrado.";
        exit;
    }

    // Convertir los paquetes seleccionados en una cadena separada por comas
    $paquetesStr = implode(",", $paquetes);

    // Insertar los datos en la base de datos
    $query = $conn->prepare("INSERT INTO usuarios (nombre, correo, edad, plan, paquetes, duracion) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$nombre, $correo, $edad, $plan, $paquetesStr, $duracion]);

    echo "Registro exitoso. Redirigiendo...";
    header("Location: usuarios.php");
    exit;
}
?>



