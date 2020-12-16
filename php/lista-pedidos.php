<?php

if($rol == "COCINERO"){ //$rol definido en validar_session.php
    $tipo = "COMIDA";
    //echo $tipo;
}else{
    $tipo = "BEBIDA";
   // echo $tipo;
}


$q = "SELECT  P.id, P.comentarios,P.nromesa,
              I.nombre, I.foto, I.tipo
      FROM pedidos P
      INNER JOIN items_menu I ON P.idItemMenu = I.id 
      WHERE P.entregado = 0 AND I.tipo = '$tipo'";       


$resultado = mysqli_query($conexion, $q);

/*if (! $resultado){
    echo "problemas";
}else{
    echo "yahoooo";
}*/


foreach($resultado as $row){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><img src="<?php $row['foto']; ?>" alt="imagen"></td>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['comentarios']; ?></td>
        <td><?php echo $row['nromesa']; ?></td>
        <td>
            <form action="php/entregar-pedido.php" method = "GET">
                <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>">
                <input type="submit" value = "Listo" class="ok" >
            </form>
        </td>
    </tr>

<?php } ?>



<ol class="lista-pedidos">
       
    <div>
        <a href="">&laquo;</a>
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">&raquo;</a>
