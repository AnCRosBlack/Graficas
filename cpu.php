<?php
require_once "php/conexion.php";

$result;
$device;

//agregar numero siguiente cada que se agregre una nueva tabla o dispositivo
$tablas = [1,2,3,4,5];

// crear variabes y un array para utilizar mas adelante
$dir = array();
$cont = 0;

// recorrer los dispositivos en un for
foreach ($tablas as $tab) {

    // var_dump($tab);
    $sql = 'SELECT * FROM DATOS'.$tab;
    $result = $conn->query($sql);
    $rows = $result->fetchAll();


    // // recorre todos los datos buscando por dispositivo
    foreach ($rows as $row) {
        // selecciona la temperatura del ultimo registro de ciertos dispositivos
        $sql2 = 'SELECT DEVICE,id,TEMP_CPU FROM DATOS'.$tab;
        $sql3 = $sql2 . ' ORDER BY FECHA DESC LIMIT 1';
        $result2 = $conn->query($sql3);
        $rows2 = $result2->fetchAll();
        // var_dump($rows2);
    }
    // // var_dump($rows2);
    // // guardar la temperatura de la ultima temperatura del dispositivo
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