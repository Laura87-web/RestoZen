<?php
require("php/conexion.php");
require("php/validar-sesion.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
   
    <title>Cajero</title>
</head><body class="f-cajero">
    <div class="encabezado">
        <h1 class="h1-cajero">Cajero</h1>
    </div>
    <div class="fila">
        <div class="columna lateral negro">
            <p><?php echo "Hola!! <br> <b>$nick</b>" ?></p>
            
            <!--<p id="fecha">Fecha</p>
            <p>Hora</p>-->
        </div>
        <div class="columna medio f-negro">
            
            <p>Mesas Ocupadas</p>

            <?php include ("php/mesas-ocupadas.php"); ?>
        
            <div class="pagina">        
                <a href="">&laquo;</a>
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">&raquo;</a>        
            </div>
        </div>    
        <div class="columna lateral">
    
            <button class="boton boton-negro">
                <a class="claro" href="mesas-cerradas.php">Ver mesas cerradas</a>
            </button>
        </div>
    </div>
    </div>
   

    <footer class="footer ">
    <?php 
            echo "<a href = 'php/cerrar-sesion.php'>SALIR</a>"
        ?>  
        
    </footer>
</body>
</html>