<html>
	<head>
		<title>Sistema Delegacional</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<?php include("head.php");?>
	</head>
	<body background="">
	<?php include "php/navbar.php"; ?><br><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2 align="center"><font color ="#0000FF">Registro de Cooperaciones</font></h2>
<!-- Button trigger modal -->
  
<br><br>
  <!-- Modal -->
  
<div class="alert alert-info" role="alert" align="right">
	<a href="#"><button type="submit" class="btn btn-info">Pase de Lista</button></a>									
	<a data-toggle="modal" href="#myModal" class="btn btn-primary">Agregar Cooperacion</a>
	<label for="tipo_cooperacion" class="col-md-1 control-label pull-left">Tipo:</label>
										<div class="col-md-3">
											<select name="tipo_cooperacion" class="form-control">
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
			<h4 class="modal-title">Agregar Cooperacion</h4>
		</div>
        </div>
		
        <div class="modal-body">
						
						<form role="form" method="post" action="php/agregar_cooperacion.php">
						
							<div class="form-group">
								<label for="tipo_cooperacion">Tipo de Cooperacion</label>
								<select name="tipo_cooperacion" class="form-control">
								<option selected="selected">--Selecciona--</option> 
								<option value="General">General</option> 			
								<option value="Ejidal">Ejidal</option> 				
								</select>	
							</div>

							<div class="form-group">
								<label for="concepto">Concepto:</label>
									<input type="text" class="form-control" name="concepto" placeholder="Concepto de Cooperacion" required >
							</div>
														
							<div class="form-group">
								<label for="cantidad">Cantidad $:</label>
									<input type="number" class="form-control" name="cantidad" placeholder="$" required >
							</div>
							
							<div class="form-group">
								<label for="descripcion">Descripcion de Cooperacion:</label>
									<textarea class="form-control" name="descripcion" placeholder="Escribe aqui..." required ></textarea>
										<style>
										textarea{resize: none;}
									</style>
							</div>
							
							<div class="form-group">
								<label for="beneficiarios">Beneficiarios de Cooperacion:</label>
									<input type="text" class="form-control" name="beneficiarios" placeholder="Escribe aqui" required >
							</div>
							
							<div class="form-group">
								<label for="fecha_cooperacion">Fecha de Registro de Cooperacion:</label>
									<input type="date" class="form-control" name="fecha_cooperacion" required >
							</div>
							
							<div class="form-group">
								<label for="fecha_limite">Fecha Limite de pago:</label>
									<input type="date" class="form-control" name="fecha_limite" required >
							</div>

							<button type="submit" class="btn btn-primary">Agregar</button>
						</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

	<?php include "php/tabla_cooperaciones.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<?php include("footer.php");?>
	</body>
</html>