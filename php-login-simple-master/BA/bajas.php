<?php
echo "<link rel=stylesheet href=juegos.css>";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "proo";
$nombre = $_POST['nombre'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection fallida: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM product WHERE nombre='$nombre'";

if ($conn->query($sql) === TRUE) {
  echo "Registro borrado correctamente";
} else {
  echo "Error al borrar registro: " . $conn->error;
}

$conn->close();
?>