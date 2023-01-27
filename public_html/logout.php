<?php
    session_start();
    session_destroy();
    setcookie("id",$fila['id'],time()+0);
    header("Location: index.php");
?>