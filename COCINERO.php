<?php
require("php/conexion.php");
include("php/validar-sesion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="JavaScript/javascript.js"></script>
    <title>Cocinero</title>
</head>
<body class="f-cocinero fondo">

<div class="encabezado">
<?php    
    echo "<h1>$rol</h1>";
    echo " <b>$nick</b>"; 
?>
</div>

<div class="fila bar">
<div class="columna lateral">

    <p id="fecha">Fecha</p>
    <p>Hora</p>
</div>
<div class="columna medio">
    <table>
        <tr>
            <th>nro</th>
            <th>imagen</th>
            <th>pedido</th>
            <th>comentario</th>
            <th>mesa</th>
        </tr>
        <?php include "php/lista-pedidos.php"; ?>
        
    </table>
    </div>
</div>
<div class="columna lateral">
<?php 
    echo "<a href = 'php/cerrar-sesion.php'>SALIR</a>"
?>   
</div>
</div>
<footer class="footer">
   
</footer>
</body>
</html>

