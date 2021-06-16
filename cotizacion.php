<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];

if(empty($nombre) || empty($apellido) || empty($edad)){
    echo "Por favor ingrese todos sus datos";
}else{
    echo "Gracias ". $nombre . " ". $apellido. " ". "tienes ". $edad. " años";
}


?>