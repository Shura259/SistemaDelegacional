<html>
	<head>
		<title>Sistema Delegacional</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body background="./images/fondo.jpg">
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2 align="center"><font color ="#0000FF">Registro de Faenas</font></h2>
<!-- Button trigger modal -->
  
<br><br>
  <!-- Modal -->
  
<div class="alert alert-info" role="alert" align="right">
	<a href="#"><button type="submit" class="btn btn-info">Pase de Lista</button></a>									
	<a data-toggle="modal" href="#myModal" class="btn btn-primary">Agregar Faena</a>
	<label for="tipo_faena" class="col-md-1 control-label pull-left">Tipo:</label>
										<div class="col-md-3">
											<select name="tipo_faena" class="form-control">
												<option selected="selected">--Selecciona--</option> 
												<option value="General">General</option> 
												<option value="Ejidal">Ejidal</option> 
											</select>
										</div>
</div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
          <div class="alert alert-info" role="alert" align="center">
			<h4 class="modal-title">Agregar Faena</h4>
		</div>
        </div>
		
        <div class="modal-body">
						
						<form role="form" method="post" action="php/agregar_faena.php">
						
							<div class="form-group">
								<label for="tipo_faena">Tipo de Faena</label>
								<select name="tipo_faena" class="form-control">
								<option selected="selected">--Selecciona--</option> 
								<option value="General">General</option> 			
								<option value="Ejidal">Ejidal</option> 				
								</select>	
							</div>

							<div class="form-group">
								<label for="lugar">Lugar de Faena:</label>
								<input type="text" class="form-control" name="lugar" placeholder="Lugar de Faena" required >
							</div>
														
							<div class="form-group">
								<label for="fecha">Fecha de Faena:</label>
								<input type="date" class="form-control" name="fecha" required >
							</div>
							
							<div class="form-group">
								<label for="hora">Hora de Faena:</label>
								<input type="time" class="form-control" name="hora" required >
							</div>
							
							<div class="form-group">
								<label for="descripcion">Descripcion de Faena:</label>
								<textarea class="form-control" name="descripcion" placeholder="Escribe aqui..." value="" required ></textarea>
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

	<?php include "php/tabla_faenas.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>