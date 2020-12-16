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
    <script src="JavaScript/javascript.js"></script>
    <title>Mozo</title>
</head>

<body class="fondo f-mozo">
    <div class="encabezado">
        <h1>Mozo</h1>
        <?php echo "Hola!! <br> <b>$nick</b>" ?>
    </div>
    <div class="fila">
        <div class="columna lateral ">
            
            <p id="fecha">Fecha</p>
            <p>Hora</p>
        </div>
        <div class="columna medio ">
            <form action="php/guardar-pedido.php" method="POST">
                
                    <?php
                        include ("php/consulta-items.php");
                    ?> 
                    <h2>Items del Menú</h2>
                    
                   
<b>------Comidas-----</b><br>
<?php foreach($comida as $row){ ?>
    <input type="radio" name="item" value="<?php echo $row['id']?>">
    <label for="item"><?php echo $row['nombre'];?></label><br>
<?php } ?>

<b>------Bebidas-----</b><br>
<?php foreach($bebida as $row2){ ?>
<input type="radio" name="item" value="<?php echo $row2['id']; ?>">
<label for="item"><?php echo $row2['nombre'];?></label><br>
 
<?php } ?>
                    <label for="mesa">Mesa nro: </label>
                    <select name="mesa" >
                        <option selected disabled>-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                
    
                    <textarea class="comentarios" name="comentarios" id="comentarios"></textarea><br>
                    <div class="espacio-btn">
                    <button class="boton boton-verde" type="submit">Cargar Pedido</button>
                    <button class="boton boton-rojo" type="reset">Borrar</button><!--resetea lo escrito en el formulario-->
               
                                    
            </form>
        </div>
        <div class="columna lateral ">
       
        <?php 
            echo "<a href = 'php/cerrar-sesion.php'>SALIR</a>"
        ?>   
        </div>
    </div>
   

 
</body>

</html>