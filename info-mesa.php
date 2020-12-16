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
    <title>Info de Mesa</title>
</head>
<body class="fondo f-infomesa">
    <div class="encabezado">
        <h1 id=infomesa>Mesa <?php echo $_GET['mesa']; ?></h1>
    </div>
    <div class="fila">
        <div class="columna lateral">
            
            <p id="fecha-mesa"></p>
            <p id="hora"></p>
                    
            
        </div>
        <div class="columna medio">
           
            <table>
                <caption id="caption">Consumo de Mesa</caption>
                <tr>
                    <th>mozo/a</th>
                    <th>imagen</th>
                    <th>Producto</th>
                    <th>Precio U.</th>
                </tr>
                <form action="php/cerrar-mesa.php" method="POST">
                <?php include ("php/query-infomesa.php");?>
                
            </table>
            
                <input type="hidden" name= "nromesa"
                    value="<?php echo $_GET['mesa']; ?>">
                <input type="hidden" name ="montoTotal" 
                    value="<?php echo $suma; ?>">
                <input type="submit" class="boton boton-rojo cerrar" 
                  value="Cerrar Mesa" name="cerrar">
            </form>
        </div>
        <div class="columna lateral"></div>
    </div>
    <footer class="footer">
    
        <a href="CAJERO.php">Volver</a>
    
    </footer>
</body>
</html>