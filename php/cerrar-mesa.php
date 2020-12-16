<?php

require "conexion.php";
require "validar-sesion.php";


if($_POST){

        echo "se solicito cerrar la mesa";
        var_dump($_POST);
}
else{
    echo "no hay envio post";
}
$idPedido =$_POST['idPedido'];
$nroMesa = $_POST['nromesa'];
$cajero = $_SESSION['id'];
$aPagar = $_POST['montoTotal'];

$q = "INSERT INTO `cierres_de_mesas`(`nromesa`, `idCajero`, `montoTotal`,
                  `descripción`) 
      VALUES ($nroMesa,$cajero,$aPagar,'pedidos hechos') ";

mysqli_query ($conexion, $q); //envia info a tabla cierres_de_mesas
$ult = mysqli_insert_id($conexion);
//echo "ultimo ide agregado".$ult;
   
$q2 = "UPDATE pedidos SET idCierreDeMesa = $ult
        WHERE id = $idPedido";
mysqli_query($conexion, $q2); //asigna al pedido el idCierreMesa

header ("Location: ../CAJERO.php");


?>