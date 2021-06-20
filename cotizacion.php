<?php

$motherBoard = $_POST["tarjetaMadre"];
/*$apellido = $_POST["apellido"];
$edad = $_POST["edad"];*/

if(empty($motherBoard) /*|| empty($apellido) || empty($edad)*/){
    echo "No has escogido una Motherboard";
}else{
    echo $motherBoard; 
}


?>