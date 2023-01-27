<?php
    session_start();
    include "bd.php";
    if (array_key_exists("id",$_COOKIE)) {
        $_SESSION['id'] = $_COOKIE['id'];
    }
    if (!array_key_exists("id",$_SESSION)) {
        header("Location: index.php");;
    }
    include "header2.php";
?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Gestión de Incidencias I.E.S Antonio Machado</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4"></h4>
					<a href="create.php" class='btn btn-primary'>Añadir Incidencia</a>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>ID</th>
					        <th>PLANTA</th>
					        <th>AULA</th>
					        <th>DESCRIPCIÓN</th>
					        <th>FECHA ALTA</th>
					        <th>FECHA REVISIÓN</th>
							<th>FECHA SOLUCIÓN</th>
							<th>COMENTARIO</th>
							<th>ACCIÓN</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
						  		<?php
                                    $query="SELECT * FROM incidencias";               
                                    $vista_incidencias= mysqli_query($enlace,$query);
                                    while($row= mysqli_fetch_assoc($vista_incidencias)){
                                        $id = $row['id'];                
                                        $planta = $row['planta'];        
                                        $aula = $row['aula'];         
                                        $descripcion = $row['descripcion'];        
                                        $fecha_alta = $row['fechaalta'];        
                                        $fecha_rev = $row['fecharevision'];        
                                        $fecha_sol = $row['fecharesolucion'];        
                                        $comentario = $row['comentario']; 
                                        echo "<tr >";
                                        echo " <th scope='row' class='scope'>{$id}</th>";
                                        echo " <td > {$planta}</td>";
                                        echo " <td > {$aula}</td>";
                                        echo " <td >{$descripcion} </td>";
                                        echo " <td >{$fecha_alta} </td>";
                                        echo " <td >{$fecha_rev} </td>";
                                        echo " <td >{$fecha_sol} </td>";
                                        echo " <td >{$comentario} </td>";
                                        echo " <td class='btn editar' > <a href='update.php?editar&incidencia_id={$id}' class='btn editar'>Editar</a> </td>";
                                        echo " <td class='btn eliminar'>  <a href='delete.php?eliminar={$id}' class='btn eliminar'>Eliminar</a> </td>";
                                        echo " </tr> ";
                                    }
                                ?>
					      </tr>
					    </tbody>
					  </table>
					</div>
					<a href="logout.php" name="back" class="btn btn-primary">Cerrar Sesión</a>
				</div>
			</div>
		</div>
	</section>
<?php include "footer.php"; ?>

