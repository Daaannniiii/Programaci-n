<!-- modificar_usuario.php - Modificar usuario -->
<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    $query->execute([$id]);
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $plan = $_POST['plan'];
    $paquetes = isset($_POST['paquetes']) ? implode(",", $_POST['paquetes']) : '';
    $duracion = $_POST['duracion'];

    $query = $conn->prepare("UPDATE usuarios SET nombre=?, correo=?, edad=?, plan=?, paquetes=?, duracion=? WHERE id=?");
    $query->execute([$nombre, $correo, $edad, $plan, $paquetes, $duracion, $id]);
    header("Location: usuarios.php");
}
?>