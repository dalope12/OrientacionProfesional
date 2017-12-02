<?php
    /*$Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];*/
    
    $data = json_decode(stripslashes($_POST['data']));
    $data2 = json_decode(stripslashes($_POST['parametros']));
    $nombre = $data2->Nombre;
    /*echo $Nombre."<br>";
    echo $Apellido."<br>";
    echo $Correo."<br>";*/
    /*foreach($data2 as $dd){
        echo $dd."<br>";
    }/*
    
    foreach($data as $d){
        echo $d."<br>";
    }*/
    echo $data[8]."<br>";
    echo $nombre;




?>