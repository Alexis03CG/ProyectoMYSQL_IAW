<?php
    include "bd.php";
    include "header2.php";
?>
<?php 
     if(isset($_GET['eliminar']))
     {
         $id= htmlspecialchars($_GET['eliminar']);
         $query = "DELETE FROM incidencias WHERE id = {$id}"; 
         $delete_query= mysqli_query($enlace, $query);
         echo "<script>window.location='home.php';</script>";
     }
?>
<?php include "footer.php" ?>