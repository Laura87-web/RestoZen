<?php

session_start();

$login = $_SESSION['login'];

if (!isset($login)){
    location ('Location: ../index.php');
}
else{
    $nick = $_SESSION['nombreusuario'];
    $rol = $_SESSION['rol'];
}
?>