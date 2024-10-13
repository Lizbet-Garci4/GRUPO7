<?php
$server = "localhost";
$user = "root";
$clave = "";
$bd = "ferreteria";
$enlace = mysqli_connect($server,$user,$clave,$bd);
if($enlace)
{
   echo "Conexion exitosa";
}else {
    echo "Error";
}
?>