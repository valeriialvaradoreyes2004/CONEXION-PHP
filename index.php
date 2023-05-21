<?php
include_once'conexion.php';
$conectar=new conexionPOO($host,$db,$user,$password);
$conectar->conectar();
echo"<br><br>";
$conectar->desconectar();
?> 