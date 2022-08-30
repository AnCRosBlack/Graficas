
<?php
	require_once "php/conexion.php"; 
	$conexion=conexion();
	$sql="SELECT FECHA,CO2
			from DATOS";
	$result=mysqli_query($conexion,$sql);
	$valoresY=array();//montos
	$valoresX=array();//fechas

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);


 ?>
<div id="graficaco2"></div>

<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">

	datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');
	

	var trace1 = {
		x: datosX,
		y: datosY,
		type: 'scatter',
		line: {shape: 'hvh'},
		name:'DATOS 1',
		line: {
    color: 'rgb(55, 128, 10)',
    width: 3
  }
	};

	var layout = {
  title: 'CO2',
  showlegend: false,

};
	
	var data = [trace1];

	Plotly.newPlot('graficaco2', data,layout);
</script>