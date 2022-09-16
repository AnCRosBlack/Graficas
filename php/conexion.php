<?php
function conexion()
{
	return mysqli_connect(
		'148.202.232.92',
		'adminestacion',
		'@20IoT22@',
		'estacion',
		'mysql_native_password'
		
	);
}


$servername = "148.202.232.92";  // ------ Servidor del hosting
$username = "adminestacion";         // ------ Usuario de la base de datos 
$password = "@20IoT22@";      // ------ Password para entrar a la BD
$BasedeDatos = "estacion"; // ------ Nombre de la base de datos

try {
	$conn = new PDO("mysql:host=$servername;dbname=$BasedeDatos; auth_plugin='mysql_native_password'", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<div align='center'><h1>Si me conecté</h1></div>";
} catch (PDOException $e) {
	echo "<div align='center'><h1>No me conecté: </h1></div> " . $e->getMessage();
}
?> 

