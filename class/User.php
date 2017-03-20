<?php


/**
 * Description of User
 *
 * @author Juan Miranda
 */
class User {
    
    
     function login($link)
      {
          
          $query = "SELECT * from user where nb_user='".filter_var($_POST['nb_user'], FILTER_SANITIZE_STRING)."' and password='".  md5(filter_var($_POST['Password'], FILTER_SANITIZE_STRING))."';";
          $result = mysqli_query($link, $query) or die("Consulta Fallo");
           if(mysqli_num_rows($result)>0)
               return true;
           else
               return false;
      }
  
}
