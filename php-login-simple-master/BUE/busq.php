<?php
echo "<link rel=stylesheet href=juegos.css>";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "proo";
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];

//echo "la clave es: ". $clave . "nombre es ". $nombre;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($descripcion == null ){
  $sql = "SELECT * FROM product WHERE nombre='$nombre'";
} elseif ($nombre== null) {
  $sql = "SELECT * FROM product WHERE descripcion='$descripcion' ";
} else{
  $sql = "SELECT * FROM product WHERE precio_compra='$tipo'";
}
 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //$row = $result->fetch_assoc()

  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "id: " . $row["id"]. "nombre: " . $row["nombre"] . " descripcion " . $row["descripcion"] . "  precio_compra: ". $row["precio_compra"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>