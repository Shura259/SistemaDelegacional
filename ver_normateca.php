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
		<h2 align="center"><font color ="#0000FF">Normateca</font></h2>
<!-- Button trigger modal -->
  
<br><br>
  <!-- Modal -->
  
<div class="alert alert-info" role="alert" align="right">
	<a data-toggle="modal" href="#myModal" class="btn btn-primary">Subir Archivo</a>
</div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
          <div class="alert alert-info" role="alert" align="center">
			<h4 class="modal-title">Subir Archivo</h4>
		</div>
        </div>
		
        <div class="modal-body">
						
						<form role="form" method="post" action="php/agregar_archivo.php"  ENCTYPE="multipart/form-data">
						
							<div class="form-group">
								<label for="nombre_archivo">Nombre del Archivo:</label>
								<input type="text" class="form-control"  name="nombre_archivo" placeholder="Nombre del Archivo" value="" required >
							</div>
							
							<div class="form-group">
								<label for="archivo">Selecciona un archivo</label>
								<input type="file" name="archivo"required>
							</div>

							<button type="submit" class="btn btn-primary ">Guardar Archivo</button>
						</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

	<?php include "php/tabla_archivos.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>