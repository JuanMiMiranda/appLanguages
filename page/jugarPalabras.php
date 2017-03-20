<?php
session_start();
if(!isset($_SESSION['Login']))
    header("location: login.php");
?>

<html>
    <head>
        <!-- Estilos CSS -->
        <link href="styles.css" rel="stylesheet">
        <title>  JUGAR PALABRAS </title>
    </head>
    <body>
        
    <!--  Menu -->
    <?php include '../element/menu.php'; ?>
    
    <div class="container">
        <h1>JUGAR PALABRAS</h1> 
        

<?php
         include("../class/JuegoPalabas.php");
                $jp = new JuegoPalabas();
                $jp->jugarAleatorio();
        
 ?>   
        
     
    </div>
 
    </body>
</html>