<?php
$conexion= null;
$servidor= 'localhost'; //localhost server 
$bd='sinergia'; //database name
$user='root'; //database password   
$pass='Josromel@'; //database username


try
{
 $conexion=new PDO('mysql:host='.$servidor.';dbname='.$bd,$user, $pass);
 
}
catch(PDOException $e)
{
 echo "error de conexion";
 exit;
}
 return $conexion;
?>
 