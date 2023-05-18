<?php
$host = 'localhost';
$bd = 'sitio';
$usuario = 'root';
$constrasenia = 'root';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $constrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>