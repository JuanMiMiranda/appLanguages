<?php

/**
 * Conexion con la BD
 *
 * @author Juan Miranda
 */


class BD {
    

    function abrirConexion()
	{
	  $link = mysqli_connect("localhost", "root", "", "admin_app_idiomas") // ("mysql_host", "mysql_user", "mysql_password")
                or die("No fue Posible conectar con la BD");
          mysqli_set_charset($link,'utf8');  // Charcode utf-8

        return $link;
 	}
    function cerrarConexion($link)
        {
            mysqli_close($link);

        }
}
