<?php
    include('conexion.php');

      function insertar_bd($tabla, $atributos){
        global $dbcon;  
        $contador = 0;
        $bandera = false;
        $valor = '';
        $columna = '';
        foreach ($atributos as $k => $v) {
          if($contador==0 && ($contador + 1 == sizeof($atributos))){
            $columna .= "(".$k.")";
            $valor .= "('".$v."')";              
          }else if($contador + 1 == sizeof($atributos)){
            $columna .= ", ".$k.")";
            $valor .= ", '".$v."')"; 
          }else if($contador==0){
            $columna = "(".$k."";
            $valor = "('".$v."'";      
          }else{
            $columna .= ", ".$k."";
            $valor .= ", '".$v."'";
            $bandera = true;
          }
          $contador++;
        }
        $sql = "INSERT INTO ".$tabla." ".$columna." VALUES ".$valor;                      
        //echo 'registro->'. $sql;
        if ($dbcon->query($sql) === TRUE) {
           return $dbcon->insert_id;        
        } else {
           return false;
        }
      } 
?>