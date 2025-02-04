<?php
// db.php - Conexión a la base de datos
$host = 'localhost';
$dbname = 'streamweb_db';
$username = 'root';
$password = '1234';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>