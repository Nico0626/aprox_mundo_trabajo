<?php
$servername = "localhost";
$username = "root"; // Cambia por tu usuario de MySQL
$password = "NM260621"; // Cambia por tu contraseña
$dbname = "alarma_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$estado = $_GET['estado']; // Obtener el estado de la alarma
$sql = "INSERT INTO alarmas (estado) VALUES ('$estado')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>