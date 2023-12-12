<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "organigrama";

// Parámetros recibidos desde el código QR
$curp = $_GET['curp'];

// Conecta a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Inserta los datos en la base de datos (esto es un ejemplo, puedes adaptarlo según tu estructura de base de datos)
$sql = "NSERT INTO `usuarios` (`id_usuarios`, `numCuenta`, `nombre`, `apellidoP`, `apellidoM`, `rfc`, `numTelefonico`, `tipo`, `costo`, `horaPrestamo`, `horaEntrega`, `total`) VALUES (NULL, '66789', 'fgh', 'j', 'hfd', 'kjh', '2454', 'kk', '67', '2023-12-12', '2023-12-12', '4523')";//Cambiar por la instruccion update

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>
