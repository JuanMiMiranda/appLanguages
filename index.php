<?php
session_start();
if(!isset($_SESSION['Login']))
    header("location: login.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <!-- Estilos CSS -->
        <link href="styles.css" rel="stylesheet">
        <title> HOME </title>
    </head>
    <body>
         <!--  Menu -->
     <?php include 'element/menu.php'; ?>
        
            <div class="container">
                 
                    <h3>Unidades Completadas</h3>




            </div>
 
    </body>
</html>
