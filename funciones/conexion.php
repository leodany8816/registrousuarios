<?php
 // BD
 $usuario = "root";
 $base = "test";
 $contrasena = "";
 global $dbcon;
 $dbcon = new mysqli("localhost",$usuario,$contrasena,$base) OR die ("Error al conectar con la base de datos");  
 mysqli_set_charset($dbcon, 'utf8');    
 date_default_timezone_set("America/Mexico_City");
?>