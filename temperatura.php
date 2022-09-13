<?php
require_once "php/conexion.php";
$conexion = conexion();


$sql = "SELECT FECHA,TEMPERATURA 
			from DATOS1  ORDER BY FECHA ASC";
$result = mysqli_query($conexion, $sql);
$valoresY = array(); //TEMPERATURA
$valoresX = array(); //fechas

while ($ver = mysqli_fetch_row($result)) {
	$valoresY[] = $ver[1];
	$valoresX[] = $ver[0];
}

$datosX = json_encode($valoresX);
$datosY = json_encode($valoresY);

//Dispositivo 2
$sql2 = "SELECT FECHA,TEMPERATURA 
			from DATOS2  ORDER BY FECHA ASC";
$result2 = mysqli_query($conexion, $sql2);
$valoresY2 = array(); //TEMPERATURA
$valoresX2 = array(); //fechas

while ($ver2 = mysqli_fetch_row($result2)) {
	$valoresY2[] = $ver2[1];
	$valoresX2[] = $ver2[0];
}

$datosX2 = json_encode($valoresX2);
$datosY2 = json_encode($valoresY2);

//Dispositivo 3
$sql3 = "SELECT FECHA,TEMPERATURA 
			from DATOS3 ORDER BY FECHA ASC";
$result3 = mysqli_query($conexion, $sql3);
$valoresY3 = array(); //TEMPERATURA
$valoresX3 = array(); //fechas

while ($ver3 = mysqli_fetch_row($result3)) {
	$valoresY3[] = $ver3[1];
	$valoresX3[] = $ver3[0];
}

$datosX3 = json_encode($valoresX3);
$datosY3 = json_encode($valoresY3);

//Dispositivo 4
$sql4 = "SELECT FECHA,TEMPERATURA FROM DATOS4 ORDER BY FECHA asc";
$result4 = mysqli_query($conexion, $sql4);
$valoresY4 = array(); //montos
$valoresX4 = array(); //fechas

while ($ver4 = mysqli_fetch_row($result4)) {
	$valoresY4[] = $ver4[1];
	$valoresX4[] = $ver4[0];
}

$datosX4 = json_encode($valoresX4);
$datosY4 = json_encode($valoresY4);

//Dispositivo 5
$sql5 = "SELECT FECHA,TEMPERATURA
FROM DATOS5 ORDER BY FECHA asc";
$result5 = mysqli_query($conexion, $sql5);
$valoresY5 = array(); //montos
$valoresX5 = array(); //fechas

while ($ver5 = mysqli_fetch_row($result5)) {
	$valoresY5[] = $ver5[1];
	$valoresX5[] = $ver5[0];
}

$datosX5 = json_encode($valoresX5);
$datosY5 = json_encode($valoresY5);
?>
<div id="graficaTemperatura"></div>

<script type="text/javascript">
	function crearCadenaLineal(json) {
		var parsed = JSON.parse(json);
		var arr = [];
		for (var x in parsed) {
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">
	datosX = crearCadenaLineal('<?php echo $datosX ?>');
	datosY = crearCadenaLineal('<?php echo $datosY ?>');

	datosX2 = crearCadenaLineal('<?php echo $datosX2 ?>');
	datosY2 = crearCadenaLineal('<?php echo $datosY2 ?>');

	datosX3 = crearCadenaLineal('<?php echo $datosX3 ?>');
	datosY3 = crearCadenaLineal('<?php echo $datosY3 ?>');

	datosX4 = crearCadenaLineal('<?php echo $datosX4 ?>');
	datosY4 = crearCadenaLineal('<?php echo $datosY4 ?>');

	datosX5 = crearCadenaLineal('<?php echo $datosX5 ?>');
	datosY5 = crearCadenaLineal('<?php echo $datosY5 ?>');


	var trace1 = {
		x: datosX,
		y: datosY,
		type: 'scatter',
		line: {
			shape: 'hvh'
		},
		name: 'Dispositivo 1',
		line: {
			color: 'rgb(55, 128, 10)',
			width: 3
		}
	};

	var trace2 = {
		x: datosX2,
		y: datosY2,
		type: 'scatter',
		line: {
			shape: 'hvh'
		},
		name: 'Dispositivo 2',
		line: {
			color: 'rgb(25,25,112)',
			width: 3
		}
	};

	var trace3 = {
		x: datosX3,
		y: datosY3,
		type: 'scatter',
		line: {
			shape: 'hvh'
		},
		name: 'Dispositivo 3',
		line: {
			color: 'rgb(220,220,60)',
			width: 3
		}
	};

	var trace4 = {
		x: datosX4,
		y: datosY4,
		type: 'scatter',
		line: {
			shape: 'hvh'
		},
		name: 'Dispositivo 4',
		line: {
			color: 'rgb(220,20,60)',
			width: 3
		}
	};

	var trace5 = {
		x: datosX5,
		y: datosY5,
		type: 'scatter',
		line: {
			shape: 'hvh'
		},
		name: 'Dispositivo 5',
		line: {
			color: 'rgb(220,20,220)',
			width: 3
		}
	};

	var layout = {
		title: 'TEMPERATURA',
		width: 1000,
		height: 400
	};

	var options = {
		displayModeBar: true,
		displaylogo: false,
		responsive: true,
		modeBarButtonsToRemove: ['toggleSpikelines', 'hoverClosestCartesian', 'hoverCompareCartesian']
	}

	var data = [trace1, trace2, trace3, trace4, trace5];

	Plotly.react('graficaTemperatura', data, layout, options);
</script>