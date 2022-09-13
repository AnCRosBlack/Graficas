//Dispositivo 3
// $sql3 = "SELECT FECHA,CO2
// FROM DATOS3 WHERE ORDER BY FECHA";
// $result3 = mysqli_query($conexion, $sql3);
// $valoresY3 = array(); //montos
// $valoresX3 = array(); //fechas

// while ($ver3 = mysqli_fetch_row($result3)) {
// $valoresY3[] = $ver3[1];
// $valoresX3[] = $ver3[0];
// }

// $datosX3 = json_encode($valoresX3);
// $datosY3 = json_encode($valoresY3);

// //Dispositivo 4
// $sql4 = "SELECT FECHA,CO2
// FROM DATOS4 WHERE ORDER BY FECHA";
// $result4 = mysqli_query($conexion, $sql4);
// $valoresY4 = array(); //montos
// $valoresX4 = array(); //fechas

// while ($ver4 = mysqli_fetch_row($result4)) {
// $valoresY4[] = $ver4[1];
// $valoresX4[] = $ver4[0];
// }

// $datosX4 = json_encode($valoresX4);
// $datosY4 = json_encode($valoresY4);

// //Dispositivo 5
// $sql5 = "SELECT FECHA,CO2
// FROM DATOS5 WHERE ORDER BY FECHA";
// $result5 = mysqli_query($conexion, $sql5);
// $valoresY5 = array(); //montos
// $valoresX5 = array(); //fechas

// while ($ver5 = mysqli_fetch_row($result5)) {
// $valoresY5[] = $ver5[1];
// $valoresX5[] = $ver5[0];
// }

// $datosX5 = json_encode($valoresX5);
// $datosY5 = json_encode($valoresY5);



// datosX4 = crearCadenaLineal('<?php echo $datosX4 ?>');
// datosY4 = crearCadenaLineal('<?php echo $datosY4 ?>');

// datosX5 = crearCadenaLineal('<?php echo $datosX5 ?>');
// datosY5 = crearCadenaLineal('<?php echo $datosY5 ?>');


// var trace3 = {
// x: datosX3,
// y: datosY3,
// type: 'scatter',
// line: {
// shape: 'hvh'
// },
// name: 'Dispositivo 3',
// line: {
// color: 'rgb(220,220,60)',
// width: 3
// }
// };

// var trace4 = {
// x: datosX4,
// y: datosY4,
// type: 'scatter',
// line: {
// shape: 'hvh'
// },
// name: 'Dispositivo 4',
// line: {
// color: 'rgb(220,20,60)',
// width: 3
// }
// };

// var trace5 = {
// x: datosX5,
// y: datosY5,
// type: 'scatter',
// line: {
// shape: 'hvh'
// },
// name: 'Dispositivo 5',
// line: {
// color: 'rgb(220,20,220)',
// width: 3
// }
// };