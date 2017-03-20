<?php


/**
 * Description of User
 *
 * @author Juan Miranda
 */

include("../BD.php");

class JuegoPalabas {
    
    
     function crear()
      {
       
          $bd = new BD();
          $link = $bd->abrirConexion();
          /*Insertamos la Categoria*/
          $query = "Insert into category(name, level_of_difficulty) values('" . $_POST['categoria'] . "','" . $_POST['nivelDificultad'] . "');";
          $result = mysqli_query($link, $query) or die("La Insección de la Categoria Fallo");
          print("Datos Insertados.");
   
    
         // Obtenemos la ID de la Ultima categoria creada
          $idNuevaCategoria = $link->insert_id;
        
          
          /*Insertamos las Palabras */
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es1'] . "','" . $_POST['pt1'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");

          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es2'] . "','" . $_POST['pt2'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
          
         
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es3'] . "','" . $_POST['pt3'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
        
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es4'] . "','" . $_POST['pt4'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
          
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es5'] . "','" . $_POST['pt5'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
          
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es6'] . "','" . $_POST['pt6'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
         
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es7'] . "','" . $_POST['pt7'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
          
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es8'] . "','" . $_POST['pt8'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
        
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es9'] . "','" . $_POST['pt9'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
         
          $query = "Insert into word(es, pt, category_id) values('" . $_POST['es10'] . "','" . $_POST['pt10'] . "',$idNuevaCategoria);";
          $result = mysqli_query($link, $query) or die("La Insección de Palabras Fallo");
          print("Datos Insertados.");
          
          
          $bd->cerrarConexion($link);
          return true;

       }
         
     
      
      /* Metodo que comparara si el nombre de la categoria que queremos insertar ya existe*/
       function comprobarCategoria()
      {
          
      }
      
      
      
     function jugarAleatorio()
      {
        $query = "SELECT * FROM category INNER JOIN word";
        $result = mysqli_query($link, $query) or die("La consulta Fallo");
        return result;
       }
    
  
}
