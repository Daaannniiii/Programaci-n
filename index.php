<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registro de Usuario</h2>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <form action="procesar_registro.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre y Apellidos</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" name="edad" required>
            </div>
            <div class="mb-3">
                <label for="plan" class="form-label">Plan Base</label>
                <select class="form-control" name="plan">
                    <option value="Basico">Básico</option>
                    <option value="Estandar">Estándar</option>
                    <option value="Premium">Premium</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="paquetes" class="form-label">Paquetes Adicionales</label><br>
                <input type="checkbox" name="paquetes[]" value="Deporte"> Deporte
                <input type="checkbox" name="paquetes[]" value="Cine"> Cine
                <input type="checkbox" name="paquetes[]" value="Infantil"> Infantil
            </div>
            <div class="mb-3">
                <label for="duracion" class="form-label">Duración</label>
                <select class="form-control" name="duracion">
                    <option value="Mensual">Mensual</option>
                    <option value="Anual">Anual</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>
</html>
