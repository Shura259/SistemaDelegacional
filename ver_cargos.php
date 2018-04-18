<?php 
include "php/conexion.php";
							$sql="SELECT * from cargos";
							$result = $con->query($sql); 
							 
							if ($result->num_rows > 0) 
							{
								$combobit="";
								while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
								{
									$combobit .=" <option value='".$row['cargo']."'>".$row['cargo']."</option>"; 
								}
							}
							else
							{
								echo "No hubo resultados";
							}
							$con->close(); //cerramos la conexión
							?>
							
<html>
	<head>
		<title>Cargos de Habitantes</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript"></script>
		<?php include("head.php");?>
	</head>
	<body background="">
	<?php include "php/navbar.php"; ?><br><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2 align="center"><font color ="#0000FF">Registro de Cargos</font></h2><br>
<br><br>
  <!-- Modal -->
  <div class="alert alert-info" role="alert" align="right">
	<a href="#"><button type="submit" class="btn btn-info pull-left">Nuevo Cargo</button></a>									
	<a data-toggle="modal" href="#myModal" class="btn btn-primary">Agregar Cargo</a>
</div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
		<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
          <div class="alert alert-info" role="alert" align="center">
			<h4 class="modal-title">Registrar Cargo</h4>
		</div>
        </div>
		
        <div class="modal-body">
						
						<form role="form" method="post" action="php/agregar_cargo.php">

							<div class="form-group">
								<label for="nombre">Nombre de Habitante:</label>
									<input type="text" class="form-control" name="nombre_habitante" placeholder="Nombre" required >
							</div>
							
							<div class="form-group">
								<label for="cargo">Selecciona un cargo:</label>
								<select name="cargo" class="form-control">
								   <option selected="selected">--Elige un cargo--</option>
								   <?php echo $combobit; ?>
							    </select>
							</div>
							
							<div class="form-group">
								<label for="inicio_cargo">Fecha de Inicio de Cargo:</label>
								<input type="date" class="form-control" name="inicio_cargo" required>
							</div>
							
							<div class="form-group">
								<label for="fin_cargo">Fecha de Termino de Cargo:</label>
									<input type="date" class="form-control" name="fin_cargo" required>
							</div>
							
							<div class="form-group">
								<label for="trabajos_realizados"> Trabajos Realizados:</label>
								<textarea rows="4" cols="20" class="form-control" name="trabajos_realizados" placeholder="Escribe aqui..."></textarea>
										<style>
												textarea{resize: none;}
										</style>
							</div>
							
							<div class="form-group">
								<label for="trabajos_pendientes">Trabajos Pendientes</label>
								<textarea rows="4" cols="20" class="form-control" name="trabajos_pendientes" placeholder="Escribe aqui..."></textarea>
										<style>
												textarea{resize: none;}
										</style>
							</div>

						  <button type="submit" class="btn btn-primary">Agregar</button>
						</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla_cargos.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<?php include("footer.php");?>
	</body>
</html>