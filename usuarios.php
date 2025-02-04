
<?php
require 'db.php';
$query = $conn->query("SELECT * FROM usuarios");
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Usuarios</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Plan</th>
                    <th>Paquetes</th>
                    <th>Duración</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                        <td><?= htmlspecialchars($usuario['correo']) ?></td>
                        <td><?= htmlspecialchars($usuario['edad']) ?></td>
                        <td><?= htmlspecialchars($usuario['plan']) ?></td>
                        <td><?= htmlspecialchars($usuario['paquetes']) ?></td>
                        <td><?= htmlspecialchars($usuario['duracion']) ?></td>
                        <td>
                            <a href="modificar_usuario.php?id=<?= $usuario['id'] ?>" class="btn btn-warning btn-sm">Modificar</a>
                            <a href="eliminar_usuario.php?id=<?= $usuario['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
