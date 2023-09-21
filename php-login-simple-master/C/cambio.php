<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "proo";
$nombre = $_POST['nombre'];
$id = $_POST['IdJ'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE product SET nombre ='$nombre' WHERE descripcion='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Registro modificado correctamente";
} else {
  echo "Error al cambiar el registro: " . $conn->error;
}

$conn->close();
?>