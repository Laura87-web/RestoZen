<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>Mesas Cerradas</title>
</head>

<body class="f-mesasCerradas fondo">
    <div class="encabezado">
        <h1>Mesas Cerradas</h1>
    </div>
    <div class="fila">
        <div class="columna lateral">
        
            <p id="fecha"></p>
            
        </div>
        <div class="columna medio">
            
            <table class="tabla">
                <caption>Ultimas 10 mesas cerradas</caption>
                <tr>
                    <th>idCierre</th>
                    <th>nroMesa</th>
                    <th>FechaHora</th>
                    <th>idCajero</th>
                    <th>MontoTotal</th>
                    
                </tr>
                
    <?php  include "php/query-mesasClosed.php" ?>


                
            </table>

            <div >
                <a href="" >&laquo;</a>
                <a href="" >1</a>
                <a href="" >2</a>
                <a href="" >3</a>
                <a href="" >&raquo;</a>                
              </div>
            </div>
        </div>
        <div class="columna lateral"></div>
    </div>

    <footer class="footer">       
        <a href="CAJERO.php" class="boton boton-negro">Volver</a>
    </footer>
</body>

</html>