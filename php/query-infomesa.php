<?php
require "conexion.php";

$nro = $_GET['mesa'];
$q = "SELECT I.nombre, I.precio, I.foto,
             U.nombreusuario, P.nromesa, P.id
      FROM pedidos P 
      iNNER JOIN items_menu I ON I.id = P.idItemMenu
      INNER JOIN usuarios U ON P.idMozo = U.id
      WHERE P.nromesa = $nro AND P.entregado = 1";
$result = mysqli_query($conexion, $q);
$suma = 0;

foreach ($result as $row){ ?>
    
    <tr>
        <td><?php echo $row['nombreusuario']; ?></td>
        <td><img src="<?php  $row['foto']; ?>" alt="img"></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['precio'];
               $suma = $suma + $row['precio']; ?>
        </td>
        <td class = "oculto"> 
           <input type="hidden" name="idPedido" value ="<?php echo $row['id']; ?>">
        </td>
      
    </tr>
<?php } ?>
<tr>
       <td ></td>
       <td colspan="2">Total a Pagar</td>
       <td><?php echo $suma; ?></td>
    </tr>

