<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "registro";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$materia = $_POST['materia'];
$contrasena = $_POST['contrasena'];

// Insertar datos en la tabla
$sql = "INSERT INTO uni (nombre, correo, materia, contrasena) VALUES ('$nombre', '$correo', '$materia', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
