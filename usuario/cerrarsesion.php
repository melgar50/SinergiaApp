
<?php 
    session_start(); //Iniciar una nueva sesión o reanudar la existente
    session_destroy(); //Destruye la sesión
  
    header('location: /SinergiaApp/index.php'); //Redirecciona la inicio
?>