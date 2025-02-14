<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tareas</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqHaCq5s5l2j9h" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Bienvenido a la Gestión de Tareas</h1>


        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Registro</h2>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="usuario">Nombre de Usuario:</label>
                        <input type="text" class="form-control" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasena" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </form>
            </div>
        </div>


        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2>Inicio de sesión</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasena" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy5q6g5P6McNpf0d2lGS3G5ENzAqPQF4H5uKru8Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-B4gt1jrGC7Jh4AgR6tPCQIWqvWjS7j+k1b1tji7f5qlfbgsoiWw7zL7V+7Qs2gIu" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqHaCq5s5l2j9h" crossorigin="anonymous"></script>
</body>
</html>

