<?php

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


if(mail('carlosjfm24@gmail.com','carlosjfm24@gmail.com', $asunto, $mensaje)){
    
    echo "GRACIAS POR UNIRTE, YA CASI LLEGAMOS A LA META";
}else{
    
    echo "ALGO SALIO MAL";
}


?>