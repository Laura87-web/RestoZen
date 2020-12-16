<?php

require ('conexion.php');
require ('validar-sesion.php');

    $nroMesa = $_POST['mesa'];
    $idMozo = $_SESSION['id'];
    $idItem = $_POST['item'];
    $comentarios = $_POST['comentarios'];
    $time = "fechadehoy";

   /* echo "nro de mesa: $nroMesa <br> ";
    echo "ide mozo: $idMozo <br> ";
    echo "id item: $idItem <br>";
    echo "comentarios: $comentarios <br>" ;
    echo "fecha: $time <br>";*/
      

   $sql = "INSERT INTO `pedidos`(`nromesa`, `idMozo`, `idItemMenu`, `comentarios`, `fechayhora`, `entregado`, `idCierreDeMesa`) 
    VALUES ('$nroMesa','$idMozo', '$idItem', '$comentarios', '$time', '0', NULL)";
    
    $resultado = mysqli_query ($conexion, $sql);

   /* if (! $resultado){
    echo "problemas";
}else{
    echo "bieeeen";
}*/

header("Location: ../MOZO.php");

?>