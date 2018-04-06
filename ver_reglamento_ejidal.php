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
		<h2 align="center"><font color ="#0000FF">Reglamento Ejidal</font></h2>
<!-- Button trigger modal -->
  
<br><br>
  <!-- Modal -->
  
<div class="alert alert-info" role="alert" align="right">
	<a data-toggle="modal" href="#myModal" class="btn btn-primary">Agregar Regla</a>
	<label for="categoria" class="col-md-1 control-label pull-left">Categoria:</label>
										<div class="col-md-3">
											<select name="categoria" class="form-control">
												<option selected="selected">--Selecciona--</option> 
												<option value="Derechos">Derechos</option> 
												<option value="Obligaciones">Obligaciones</option> 
											</select>
										</div>
</div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
          <div class="alert alert-info" role="alert" align="center">
			<h4 class="modal-title">Nueva regla</h4>
		</div>
        </div>
		
        <div class="modal-body">
						
						<form role="form" method="post" action="php/agregar_regla_ejidal.php">
							<div class="form-group">
								<label for="categoria">Categoria:</label>
								<select name="categoria" class="form-control" required>
								<option selected="selected">--Selecciona--</option> 
								<option value="Derechos">Derechos</option> 			
								<option value="Obligaciones">Obligaciones</option> 				
								</select>	
							</div>

							<div class="form-group">
								<label for="nombre">Nombre de la Regla:</label>
								<input type="text" class="form-control"  name="nombre" placeholder="Nombre de la regla" value="" required >
							</div>
							
							<div  id="descripcion" class="form-group">
								<label for="descripcion">Describe la Regla:</label>
								<textarea rows="4" cols="20"  class="form-control" name="descripcion" placeholder="Escribe aquí..." required></textarea>
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

	<?php include "php/tabla_reglamento_ejidal.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>