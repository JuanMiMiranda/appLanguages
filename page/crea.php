<?php
session_start();
if(!isset($_SESSION['Login']))
    header("location: login.php");
?>

<html>
    <head>
        <!-- Estilos CSS -->
        <link href="styles.css" rel="stylesheet">
        <title> CREA </title>
    </head>
    <body>
        
    <!--  Menu -->
    <?php include '../element/menu.php'; ?>
    
    <div class="container">
        <h1>CREA</h1> 
        <h3> Crear Juego </h3>
     
        <A HREF="crearJuegoPalabras.php">Crear Juego de Palabas</A>
        <BR>
         <A HREF="crearJuegoVerbos.php">Crear Juego de Verbos</A>
         
    
  </div>
 
    </body>
</html>
