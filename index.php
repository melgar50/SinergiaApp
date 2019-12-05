<?php include ("Database/conexion.php") ?>

 <html>

<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="UTF-8" /> 
    <title>AppSinergia</title> 
    <link rel="stylesheet" type="text/css" href="Css/estilos.css" media="screen" />  <!-- Agrega la hoja de estilo que esta en la carpeta CSS -->
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  </head> 
  <body> 
 
    
    <section class="forms-section">
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Sinergia
        
      </button>
      <form action="index.php" method="post"  class="form form-login">     <!--envia los datos a login-->
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">Correo</label>
            <input id="login-email" type="email" name="t1" required>
          </div>
          <div class="input-block">
            <label for="login-password">Contraseña</label>
            <input id="login-password" type="password" name="t2" required>
          </div>
        </fieldset>
       <button type="submit" class="btn-login">Login</button>
      </form>
    </div>

    <!--
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">

        Sign Up
        <span class="underline"></span>
      </button>
      <form class="form form-signup">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
      -->
    </div>

  </div>
</section>

   <script src="Js/index.js"></script>
  </body>



<?php
        if($_POST){
           session_start();
           require ('Database/conexion.php');
           $u= $_POST['t1'];  // almacena lo que contiene el texto de email a la variable U
           $p= $_POST['t2'];
           $conexion -> SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $query = $conexion-> prepare("SELECT * FROM usuario where email= :t1 AND contraseña= :t2");
           $query -> bindParam(":t1", $u);
           $query -> bindParam(":t2", $p);
           $query -> execute();
           $usuario = $query->fetch(PDO::FETCH_ASSOC);
           if ($usuario){
            $_SESSION["usuario"] = $usuario ["email"];
            header ("location:/SinergiaApp/Plantilla/stream/index.php");
          }else{
            echo "<div style='color:red'>Usuario o contraseña invalido </div>";
          

           }
        }
  

     ?>
 <footer> 
 </footer> 

</html>
