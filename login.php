<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Bibliotecas CSS necesarias Bootstrap -->
        <link href="styles.css" rel="stylesheet">

        <title> App de Idiomas DW </title>
    </head>
    <body>
      <div class="container">
    <h1>App de Idiomas DW </h1> 

 
<!-- Div de Login-->
        <div class="div-login">
          <form action="login.php" method="Post">
            
              <input type="text" c placeholder="Usuario" name="nb_user">
           
   
              <input type="password"  placeholder="Password" name="Password">
           
            
                <input type="submit"  name="Validar" value="Login" />
              
          
          </form>
      </div>


      <div class="modal-footer">
          <div class="col-md-12">
              <?php

        if(isset($_POST['Validar']))
        {
            include("BD.php");
            include("class/User.php");
        
            $bd = new BD();
            $link = $bd->abrirConexion();

                $user = new User();
                if($user->login($link))
                {
                   $_SESSION['Login']=filter_var($_POST['Login'], FILTER_SANITIZE_STRING);
                   header("location: index.php");
                   print "Usuario OK";
                }
                else
                {
                    echo ("
                            <div class='alert-div'>
                                <P> Error de autentificación, Los datos introducidos no son correctos</P>
                           
                            </div>
                         ");
                }

            $bd->cerrarConexion($link);
        }
      
        ?>
         </div>	
      </div>
  </div>         
</body>
</html>
