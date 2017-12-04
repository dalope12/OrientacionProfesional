<?php
    $data = json_decode(stripslashes($_POST['data']));
    $data2 = json_decode(stripslashes($_POST['parametros']));
    $nombre = $data2->Nombre;
    $apellido = $data2->Apellido;
    $correo = $data2->Correo;
    
    /*foreach($data2 as $dd){
        echo $dd."<br>";
    }*/
    echo "Hola, ".$nombre." tienes afinidad con las siguientes carreras unversitarias: <br>";
    determinar_carrera();
    function determinar_carrera(){
            global $data;
            $car1 = 0; //contaduria
            $car2 = 0; //produc y calidad 
            $car3 = 0; //admon emp agro
            $car4 = 0; //ing agropecuaria
            $car5 = 0; //cominicacion audiovisual
            $car6 = 0; //licenciatura en ed fisica
            $car7 = 0; //profesional en dep
            $car8 = 0; //ing civil
            $car9 = 0; //ing en h y s ocupacio
            $car10 = 0; //ing en ins y control
            $car11 = 0; //ing informatica  
            if (strcmp($data[0],'MG') === 0) {
              $car5 = $car5 + 1 ; 
            }
            if (strcmp($data[1],'MG') === 0) {
              $car1 = $car1 + 1 ;  
              $car8 = $car8 + 1 ;
              $car9 = $car9 + 1 ;
              $car10 = $car10 + 1 ;
              $car11 = $car11 + 1 ;  
            }
            if (strcmp($data[2],'MG') === 0) {
              $car5 = $car5 + 1 ;  
            }
            if (strcmp($data[3],'MG') === 0) {
              $car3 = $car3 + 1 ;
              $car4 = $car4 + 1 ;  
            }
            if (strcmp($data[4],'MG') === 0) {
              $car8 = $car8 + 1 ;  
            }
            if (strcmp($data[5],'MG') === 0) {
              $car3 = $car3 + 1 ;
              $car4 = $car4 + 1 ;  
            }
            if (strcmp($data[6],'MG') === 0) {
              $car8 = $car8 + 1 ;  
            }
            if (strcmp($data[7],'MG') === 0) {
              $car1 = $car1 + 1 ;  
            }
            if (strcmp($data[8],'MG') === 0) {
              $car8 = $car8 + 1 ;  
            }
            if (strcmp($data[9],'MG') === 0) {
              $car1 = $car1 + 1 ;
              $car8 = $car8 + 1 ;
              $car9 = $car9 + 1 ;
              $car10 = $car10 + 1 ;
              $car11 = $car11 + 1 ;  
            }
            if (strcmp($data[10],'MG') === 0) {
              $car10 = $car10 + 1 ;
              $car11 = $car11 + 1 ;  
            }
            if (strcmp($data[11],'MG') === 0) {
              $car5 = $car5 + 1 ;  
            }
            if (strcmp($data[12],'MG') === 0) {
              $car11 = $car11 + 1 ;  
            }
            if (strcmp($data[13], 'MG') === 0) {
              $car5 = $car5 + 1 ;  
            }
            if (strcmp($data[14], 'MG') === 0) {
              $car3 = $car3 + 1 ;
              $car4 = $car4 + 1 ;  
            }
            if (strcmp($data[15], 'MG') === 0) {
              $car5 = $car5 + 1 ;  
            }
            if (strcmp($data[16], 'MG') === 0) {
              $car6 = $car6 + 1 ;
              $car7 = $car7 + 1 ;  
            }
            if (strcmp($data[17], 'MG') === 0) {
              $car3 = $car3 + 1 ;
              $car4 = $car4 + 1 ;  
            }
            if (strcmp($data[18], 'MG') === 0) {
              $car1 = $car1 + 1 ;  
            }
            if (strcmp($data[19], 'MG') === 0) {
              $car3 = $car3 + 1 ;  
            }
            if (strcmp($data[20], 'MG') === 0) {
              $car4 = $car4 + 1 ;  
            }
            if (strcmp($data[21], 'MG') === 0) {
              $car6 = $car6 + 1 ;
              $car7 = $car7 + 1 ;  
            }
            if (strcmp($data[22], 'MG') === 0) {
              $car6 = $car6 + 1 ;
              $car7 = $car7 + 1 ;   
            }
            if (strcmp($data[23], 'MG') === 0) {
              $car9 = $car9 + 1 ;  
            }
            if (strcmp($data[24], 'MG') === 0) {
              $car9 = $car9 + 1 ;  
            }
            if (strcmp($data[25], 'MG') === 0) {
              $car6 = $car6 + 1 ;
              $car7 = $car7 + 1 ;  
            }
            if (strcmp($data[26], 'MG') === 0) {
              $car6 = $car6 + 1 ;
              $car7 = $car7 + 1 ;  
            }
            if (strcmp($data[27], 'MG') === 0) {
              $car10 = $car10 + 1 ;  
            }
            if (strcmp($data[28], 'MG') === 0) {
              $car10 = $car10 + 1 ;  
            }
            if (strcmp($data[29], 'MG') === 0) {
              $car11 = $car11 + 1 ;  
            }
            if (strcmp($data[30], 'MG') === 0) {
              $car9 = $car9 + 1 ;  
            }
            if (strcmp($data[31], 'MG') === 0) {
              $car1 = $car1 + 1 ;  
            }
            if($car1>2){
               echo "Contaduría Pública = ".(($car1/5)*100)."%"."<br>";
            }
            if($car3>2){
              echo "Administración de Empresas Agropecuarias = ".(($car3/5)*100)."%"."<br>";
            }
            //echo "Ingeniería de Productividad y Calidad = ".(($car2/5)*100)."<br>";
            if ($car4>2) {
                echo "Ingeniería Agropecuaria = ".(($car4/5)*100)."%"."<br>";
            }
            if ($car5>2) {
               echo "Comunicación Audiovisual = ".(($car5/5)*100)."%"."<br>";
            }
            if ($car6>2) {
                echo "Licenciatura en Educación Física = ".(($car6/5)*100)."%"."<br>";
            }
            if ($car7>2) {
                echo "Profesional en Deporte = ".(($car7/5)*100)."%"."<br>";
            }
            if ($car8>2) {
                echo "Ingeniería Civil = ".(($car8/5)*100)."%"."<br>";
            }
            if ($car9>2) {
                echo "Ingeniería en Higiene y Seguridad Ocupacional = ".(($car9/5)*100)."%"."<br>";
            }
            if ($car10>2) {
                echo "Ingeniería en Instrumentación y Control = ".(($car10/5)*100)."%"."<br>";
            }
            if ($car11>2) {
               echo "Ingeniería Informática = ".(($car11/5)*100)."%"."<br>";
            }        
    }
    include_once("../DATOS/usuarios.php");
    if (strcmp($nombre,'') === 0) {
           return false;
    }else{
        registrar_usuario();  
    }
    
    

?>