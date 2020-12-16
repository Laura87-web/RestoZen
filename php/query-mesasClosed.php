<?php
    include "conexion.php";
    include "validar-sesion.php";


$q = "SELECT * FROM cierres_de_mesas";
$result = mysqli_query ($conexion, $q);

foreach($result as $row){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nromesa'];?></td>
        <td><?php echo $row['fechayhora'];?></td>
        <td><?php echo $row['idCajero']; ?></td>
        <td><?php echo $row['montoTotal']; ?></td>
        
<?php } ?>



