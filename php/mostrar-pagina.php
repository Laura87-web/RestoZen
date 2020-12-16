<?php

include ("conexion.php");


session_start();//inicia una nueva sesion
$_SESSION["login"] = false; //valor login en falso

//variables para recibir y guardar los datos enviados desde el formulario
$nick = $_POST["usuario"];
$password = $_POST["password"];

//consultamos la bd para saber si el nick ingresado existe
$q = "SELECT * FROM usuarios WHERE nombreusuario = '$nick'
AND clave = '$password' ";

$consulta = mysqli_query($conexion, $q);
$consulta = mysqli_fetch_array($consulta);//guarda en un arreglo todos los campos de una fila

if ($consulta){ 
     
    $_SESSION["login"] = true;//guardamos en variable global los datos de usuario de la sesion actual
    $_SESSION["nombreusuario"] = $consulta['nombreusuario'];
    $_SESSION["nombre"] = $consulta['nombre'];
    $_SESSION["apellido"] = $consulta['apellido'];
    $_SESSION["rol"] = $consulta['rol'];
    $_SESSION["id"] = $consulta['id'];
     
    //redireccionamiento
    //echo "usuario encontrado y sesionado";
    $rol = $_SESSION["rol"];
    header("Location: ../$rol.php");
}
else{
    //devuelve a pagina inicio
    echo "usuario o contraseña incorrectos";
    echo "<br><a href= '../index.php'>Intenta de nuevo..</a>";
  // header('Location:../index.html?ERROR');
    
}


?>