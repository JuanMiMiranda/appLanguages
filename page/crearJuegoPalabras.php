<?php
session_start();
if(!isset($_SESSION['Login']))
    header("location: login.php");
?>

<html>
    <head>
        <!-- Estilos CSS -->
        <link href="styles.css" rel="stylesheet">
        <title> CREAR JUEGO DE PALABRAS </title>
    </head>
    <body>
        
    <!--  Menu -->
    <?php include '../element/menu.php'; ?>
    
    <div class="container">
        <h1>CREAR JUEGO DE PALABRAS </h1> 
        
        <form action="crearJuegoPalabras.php" method="Post">
            
              <input type="text"  placeholder="Categoria" name="categoria">
              <BR>
              <input type="text"  placeholder="Nivel de Dificultad [0-10]" name="nivelDificultad">
              <BR>
   
              
                    <table>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es1"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt1"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es2"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt2"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es3"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt3"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es4"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt4"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es5"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt5"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es6"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt6"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es7"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt7"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es8"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt8"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es9"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt9"></strong></td>
                      </tr>
                      <tr>
                        <td><strong><input type="text" placeholder="ES" name="es10"></strong></td>
                        <td><strong><input type="text" placeholder="PT" name="pt10"></strong></td>
                      </tr>
                      
                      

                   
                     </table>
              
             
                <input type="submit" class="btn btn-primary btn-lg btn-block" name="Validar" value="Enviar" />
              
          
          </form>
     
  </div>
 
    </body>
</html>


 <?php
        if(isset($_POST['Validar']))
        {
           
            include("../class/JuegoPalabas.php");
                $jp = new JuegoPalabas();
                if($jp->crear())
                {
                  echo ("
                            <div class='alert-div'>
                                <P> Juego Creado Correctamente</P>
                           
                            </div>
                         ");
                }
                else
                {
                    echo ("
                            <div class='alert-div'>
                                <P> Error el Juego no pudo ser creado</P>
                           
                            </div>
                         ");
                }

            
        }
      
        ?>