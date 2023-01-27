<!-- Footer -->
<?php 
    include "bd.php";
    include "header2.php";
?>

<?php
   if(isset($_GET['incidencia_id']))
    {
      $incidenciaid = htmlspecialchars($_GET['incidencia_id']); 
    }
      
      $query="SELECT * FROM incidencias WHERE id = $incidenciaid ";
      $vista_incidencias= mysqli_query($enlace,$query);

      while($row = mysqli_fetch_assoc($vista_incidencias))
        {
          $id = $row['id'];                
          $planta = $row['planta'];        
          $aula = $row['aula'];         
          $descripcion = $row['descripcion'];        
          $fecha_alta = $row['fechaalta'];        
          $fecha_rev = $row['fecharevision'];        
          $fecha_sol = $row['fecharesolucion'];        
          $comentario = $row['comentario'];
        }
 
    if(isset($_POST['Editar'])) 
    {
      $planta = htmlspecialchars($_POST['planta']);
      $aula = htmlspecialchars($_POST['aula']);
      $descripcion = htmlspecialchars($_POST['descripcion']);
      $fecha_alta = htmlspecialchars($_POST['fechaalta']);
      $fecha_rev = htmlspecialchars($_POST['fecharevision']);
      $fecha_sol = htmlspecialchars($_POST['fecharesolucion']);
      $comentario = htmlspecialchars($_POST['comentario']);
      $query = "UPDATE incidencias SET planta = '{$planta}' , aula = '{$aula}' , descripcion = '{$descripcion}', fechaalta = '{$fechaalta}', fecharevision = '{$fecharevision}', fecharesolucion = '{$fecharesolucion}', comentario = '{$comentario}' WHERE id = {$id}";
      $incidencia_actualizada = mysqli_query($enlace, $query);
      if (!$incidencia_actualizada)
        echo "Se ha producido un error al actualizar la incidencia.";
      else
        echo "<script type='text/javascript'>alert('¡Datos de la incidencia actualizados!')</script>";
    }             
?>

<h1 class="text-center">Actualizar Incidencia</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="planta" >Planta</label>
        <input type="text" name="planta" class="form-control" value="<?php echo $planta  ?>">
      </div>
      <div class="form-group">
        <label for="aula" >Aula</label>
        <input type="text" name="aula" class="form-control" value="<?php echo $aula  ?>">
      </div>
      <div class="form-group">
        <label for="descripcion" >Descripción</label>
        <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion  ?>">
      </div>
      <div class="form-group">
        <label for="fechaalta" >Fecha de Alta</label>
        <input type="date" name="fecha_alta" class="form-control" value="<?php echo $fechaalta  ?>">
      </div>
      <div class="form-group">
        <label for="fecharevision" >Fecha de Revisión</label>
        <input type="date" name="fecha_rev" class="form-control" value="<?php echo $fecharevision  ?>">
      </div>
      <div class="form-group">
        <label for="fecharesolucion" >Fecha de Resolución</label>
        <input type="date" name="fecha_sol" class="form-control" value="<?php echo $fecharesolucion  ?>">
      </div>
      <div class="form-group">
        <label for="comentario" >Comentario</label>
        <input type="text" name="comentario" class="form-control" value="<?php echo $comentario  ?>">
      </div>
      <div class="form-group">
         <input type="submit"  name="Editar" class="btn btn-primary mt-2" value="Editar">
      </div>
    </form>    
  </div>

    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Volver </a>
    <div>

<?php include "footer.php" ?>