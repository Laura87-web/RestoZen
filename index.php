<!DOCTYPE html>
<html lang="es">
<!-- detecta idioma español -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestoZen</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="JavaScript/javascript.js"></script>
</head>

<body class="fondo f-inicio">
    <div class="encabezado"></div>
    <div class="fila">
        <div class="columna lateral"></div>
        <div class="columna medio">
            <h1>Resto<samp>Z</samp>EN</h1>
           
            <form action="php/mostrar-pagina.php" method="POST" name="formPost">
                <label for="usuario">Usuario</label><br>
                <input type="text" id="usuario" name="usuario" placeholder="Tu Usuario"><br>
                <label for="password">Contraseña</label><br>
                <input type="password" id="password" name="password" placeholder="Tu Contraseña"><br>
               <input type="hidden" name="enviar_hdn" value="post">
                <input type="button" id="ingresar" name="ingresar" class="boton boton-negro" value="Ingresar">
            </form>
        
        </div>
        <div class="columna lateral"></div>
    </div>
    <footer class="footer"></footer>


</body>

</html>