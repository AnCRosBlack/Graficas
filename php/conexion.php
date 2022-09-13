<?php
function conexion()
{
	return mysqli_connect(
		'localhost',
		'root',
		'',
		'MONITOREO'
	);
	// return mysqli_connect(
	// 	'10.225.169.48',
	// 	'CRECE',
	// 	'CUVALLES',
	// 	'MONITOREO'
	// );
}

// $servername = "10.225.169.48";  // ------ Servidor del hosting
// $username = "CRECE";         // ------ Usuario de la base de datos 
// $password = "CUVALLES";      // ------ Password para entrar a la BD
// $BasedeDatos = "MONITOREO"; // ------ Nombre de la base de datos

$servername = "localhost";  // ------ Servidor del hosting
$username = "root";         // ------ Usuario de la base de datos 
$password = "";      // ------ Password para entrar a la BD
$BasedeDatos = "MONITOREO"; // ------ Nombre de la base de datos

try {
	$conn = new PDO("mysql:host=$servername;dbname=$BasedeDatos", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "<div align='center'><h1>Si me conecté</h1></div>";
} catch (PDOException $e) {
	// echo "<div align='center'><h1>No me conecté: </h1></div> " . $e->getMessage();
}
?> 

