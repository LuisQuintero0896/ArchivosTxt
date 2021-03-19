<?php
    $file = fopen ('practica1.txt', 'a+') or die("Error al intentar crear archivo");
    $asunto = $_REQUEST['asunto'];
    $contenido =$_REQUEST['contenido'];

    fwrite($file,$asunto);
    fwrite($file,"\n");
    fwrite($file,$contenido);

    echo "Su Archivo fue creado satisfactoriamente";
    fclose($file);

?>