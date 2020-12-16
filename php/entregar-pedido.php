<?php
include "conexion.php";
require "validar-sesion.php";

if ($_GET){
    
    /*ECHO "bieeen";
    ECHO is_array($_GET);
    echo count($_GET);*/
    echo var_dump ($_GET);//muestra lo que tiene la variable y como lo guarda
    echo $idUpdate = $_GET['id'];
    $q = "UPDATE `pedidos` SET `entregado`= 1 WHERE id = $idUpdate";
    mysqli_query($conexion, $q);

   header ("Location: ../COCINERO.php");
 }
else{
    echo "whats???";
}




?>