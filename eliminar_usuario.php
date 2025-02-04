<!-- eliminar_usuario.php - Eliminar usuario -->
<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $query->execute([$id]);
    header("Location: usuarios.php");
}
?>