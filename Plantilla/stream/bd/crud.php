<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '';
$fecha_nac = (isset($_POST['fecha_nac'])) ? $_POST['fecha_nac'] : '';

switch($opcion){
    case 1:
        $consulta = "INSERT INTO alumnos (nombre, apellidos, fecha_nac) VALUES('$nombre', '$apellidos', '$fecha_nac') ";    
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 2:
        $consulta = "UPDATE alumnos SET nombre='$nombre', apellidos='$apellidos', fecha_nac='$fecha_nac' WHERE id='$id' ";      
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3:
        $consulta = "DELETE FROM alumnos WHERE id='$id' ";      
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    case 4:
        $consulta = "SELECT id, nombre, apellidos, fecha_nac FROM alumnos";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;