<?php
    $servidor="sdb-w.hosting.stackcp.net";
    $usuario="usuario-0cd1";
    $passwd="usuario0";
    $bd="incidencias-323133d57e";
    $enlace = mysqli_connect($servidor,$usuario,$passwd,$bd);
    if(!$enlace) {
        echo "Conexion fallida: ".mysqli_connect_error();
    }
?>