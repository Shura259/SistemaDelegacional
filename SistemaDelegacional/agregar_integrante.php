<html>
	<head>
		<title>.: CRUD :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Registro de Habitantes</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar Integrante</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Integrante</h4>
        </div>
        <div class="modal-body">
						
						<form role="form" method="post" action="php/agregar.php">

							
							<div class="form-group">
								<label for="nombre">Nombre(S):</label>
								<input type="text" class="form-control"  name="nombre_jefe" placeholder="Nombre" value="" required >
							</div>
							
							<div class="form-group">
								<label for="apellido_paterno">Apellido Paterno:</label>
									<input type="text" class="form-control" name="apellido_paterno_jefe" placeholder="Apellido Paterno" value="" required >
							</div>
							
							<div class="form-group">
								<label for="apellido_materno">Apellido Materno:</label>
								<input type="text" class="form-control"  name="apellido_materno_jefe" placeholder="Apellido Materno" value="" required >
							</div>
							
							<div class="form-group">
								<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
								<input type="date" class="form-control" name="fecha_nacimiento_jefe" required >
							</div>
							
							
							<div id="especifica_otra" class="form-group">
								<label for="especifica">Especifica religion</label>
								<input type="text" class="form-control"  name="especifica_religion" placeholder="Escribe aqui..." required>
							</div>
							
							
							<div  id="motivo" class="form-group">
								<label for="motivo" class="col-md-4 control-label">Especifica el  motivo:</label>
								<textarea rows="4" cols="20"  class="form-control" name="motivo_jefe" placeholder="Especifica el motivo" required></textarea>
										<style>
									textarea{resize: none;}
										</style>
							</div>
							
							
							<div class="form-group">
								<label for="domicilio">Domicilio completo</label>
								<input type="text" class="form-control"  name="domicilio_jefe" placeholder="Domicilio completo" required>
							</div>
							
							<div class="form-group">
								<label for="monto_cuota">Monto de cuota</label>
								<input type="number" class="form-control" name="monto_cuota" placeholder="$" required>
							</div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>