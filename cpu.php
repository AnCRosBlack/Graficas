<?php
require_once "php/conexion.php";

$result;
$device;

#consulta para traer los dispositivos existentes en la base de datos 
$sql = 'SELECT DISTINCT DEVICE,id FROM DATOS GROUP BY DEVICE ASC ';
$result = $conn->query($sql);
$rows = $result->fetchAll();


// consulta para traer todos los datos
$sql3 = 'SELECT * FROM DATOS ';
$result3 = $conn->query($sql3);
$rows3 = $result3->fetchAll();

// crear variabes y un array para utilizar mas adelante
$dir = array();
$cont = 0;

// recorrer los dispositivos en un for
foreach ($rows as $row) {
    // recorre todos los datos buscando por dispositivo
    foreach ($rows3 as $row3) {
        // selecciona la temperatura del ultimo registro de ciertos dispositivos
        $sql2 = 'SELECT DEVICE,id,TEMP_CPU FROM DATOS WHERE DEVICE= ' . $row['DEVICE'];
        $sql3 = $sql2 . ' ORDER BY FECHA DESC LIMIT 1';
        $result2 = $conn->query($sql3);
        $rows2 = $result2->fetchAll();
    }
    // var_dump($rows2);
    // guardar la temperatura de la ultima temperatura del dispositivo
    $dir[$cont] = $rows2;
    $cont++;
}

?>
<div id="graficaLineal">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">DISPOSITIVO</th>
                <th scope="col">TEMPERATURA</th>
            </tr>
        </thead>
        <tbody>


            <?php
            foreach ($dir as $d) {
            ?>
                <tr>
                    <?php
                    foreach ($d as $v) {
                    ?>
                        <!-- <td><?php echo $v['id']; ?></td> -->
                        <td><?php echo $v['DEVICE']; ?></td>
                        <td><?php echo $v['TEMP_CPU']; ?></td>
                    <?php
                    }
                    ?>
                </tr>
            <?php } ?>

    </table>
</div>