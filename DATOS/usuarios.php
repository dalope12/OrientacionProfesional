<?php
      require_once '../CONTROLADOR/aspirante.php';
      require("datosconexion.php");
  
     
        function registrar_usuario(){
        	  global $db_host;
        	  global $db_usuario;
        	  global $db_contra;
              global $db_NombreBD;
              global $nombre;
              global $apellido;
              global $correo;
		      //$Conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_NombreBD);
		      $Conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

		      //condicional que pregunta si no conecto a la BD
		      if(mysqli_connect_errno()){
		        echo "Fallo al conectar a la BBDD";
		        exit();
		      }

		      //seleccionar BBDD
		      mysqli_select_db($Conexion,$db_NombreBD) or die ("No se encontro la BD");
		      //incluir caracteres latinos
		      mysqli_set_charset($Conexion,"utf8");
		      $query="INSERT INTO tbl_aspirante (nombre,apellido,correo) VALUES ('$nombre','$apellido','$correo')";
		      $resultado=mysqli_query($Conexion,$query);
		      if ($resultado==false) {
		        echo "Error en el registro de datos";
		      }else {
		        //echo "Registro exitoso";
		      }

		      //cierre de Conexion
		      mysqli_close($Conexion);

		}
      



?>