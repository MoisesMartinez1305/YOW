
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
    <style type="text/css">
     
     table {
    border-collapse: collapse;
    width: 100%;
    border-radius: 10px;
    margin-top: 20px;
    
}

table th, table td {
    text-align: left;
    padding: 8px;
    border: 1px solid #ddd;

}

table th {
    background-color: #4CAF50;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table:hover {
    background-color: #ddd;
}

table td:hover {
    background-color: gray;
}

    </style>
</head>
<body>
    
</body>
</html>
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "proo";
$conn = new mysqli($servername, $username, $password, $dbname);

// Consulta a la base de datos
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

// Generación de la tabla HTML
if ($result->num_rows > 0) {
	echo "<table class='tabla'>";
	echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio_Compra</th><th>Precio_Venta</th><th>Utilidad</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["descripcion"]."</td><td>".$row["precio_compra"]."</td><td>".$row["precio_venta"]."</td><td>".$row["utilidad"]."</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}
$conn->close();
?>