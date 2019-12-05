<?php
   class conexion
  {
   	public static function Conectar()
   	{
   		define('servidor', 'localhost');
   		define('nombre_bd', 'sinergia');
   		define('usuario', 'root');
   		define('password', 'Josromel@');
   		$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
   		try
   		{
   			$conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, usuario, password, $opciones);
   			return conexion;

   		} catch (Exception $e)
   		  {
   			die("El error de conexion es: ".$e->getMessage());
   		  } 
  }
   	
    }
?>