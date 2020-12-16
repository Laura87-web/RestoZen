<?php
include ('conexion.php');

$q = "SELECT * FROM items_menu WHERE tipo = 'comida'";
$comida = mysqli_query($conexion,$q);

$q2 = "SELECT * FROM items_menu WHERE tipo = 'bebida'";
$bebida = mysqli_query($conexion,$q2);

?>
