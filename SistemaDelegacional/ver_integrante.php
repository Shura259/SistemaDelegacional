<?php 

include "php/conexion.php";

							$sql="SELECT * from religion";
							$result = $con->query($sql); 
							 
							if ($result->num_rows > 0) 
							{
								$combobit="";
								while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
								{
									$combobit .=" <option value='".$row['religion']."'>".$row['religion']."</option>"; 
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
		<title>Sistema Delegacional</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.2.min.js"
              integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk="
              crossorigin="anonymous"></script>
    <script type="text/javascript"></script>
	<?php include("head.php");?>
	</head>
	
	
<body background="" onLoad="EspecificaReligion();">
	<?php include "php/navbar.php";?><br><br><br><br><br><br>
<div class="container">
<div class="row">
		<h2 align="center"><font color ="#0000FF">Registro de Integrantes</font></h2>
<!-- Button trigger modal -->
  
<br><br>
  <!-- Modal -->
  
<div class="alert alert-info" role="alert" align="right">
	<a data-toggle="modal" href="#myModal" class="btn btn-primary">Agregar</a>
</div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
          <div class="alert alert-info" role="alert" align="center">
			<h4 class="modal-title">Agregar Integrante</h4>
		</div>
        </div>
		
        <div class="modal-body">
						
						<form role="form" name="formulario" id="formulario" method="post" action="php/agregar.php">
						
							<div class="form-group">
								<label for="nombre">Nombre(s):</label>
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
								<label for="edad">Edad:</label>
								<input type="number" class="form-control"  name="edad" required >
							</div>
							
							<div class="form-group">
								<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
								<input type="date" class="form-control" name="fecha_nacimiento" required >
							</div>
							
							<div class="form-group">
								<label for="sexo">Sexo:</label>
								<select name="sexo" class="form-control" id="sexo">
								<option selected="selected">--Selecciona--</option> 
								<option value="Hombre">Hombre</option> 			
								<option value="Mujer">Mujer</option> 				
								</select>	
							</div>
							
							<div class="form-group">
								<label for="religion">Selecciona Religion:</label>
								<select name="religion" class="form-control" onChange="EspecificaReligion();" required>
								   <option selected="selected">--Selecciona--</option>
								   <?php echo $combobit; ?>
								   <option name="otra_religion">Otra</option>
							    </select>
							</div>
							
							<div class="form-group">
								<label for="especifica_religion">Especifica religion</label>
								<input type="text" class="form-control"  name="especifica_religion" placeholder="Escribe tu religion" required>
							</div>
						
							<div class="form-group">
								<label for="estudia">El Habitante Estudia:</label> <br>
								<input type="radio" name="estudia" id="estudia1" value="Si"> Si<p>
								<input type="radio" name="estudia" id="estudia2" value="No"> No
							</div>
							
							<div class="form-group">
								<label for="reside">El Habitante Reside aqui:</label> <br>
								<input type="radio" name="reside" id="reside1" value="Si"> Si<p>
								<input type="radio" name="reside" id="reside2" value="No"> No
							</div>
							
							<div  id="motivo_jefe" class="form-group">
								<label for="motivo_jefe">Especifica el motivo:</label>
								<textarea rows="4" cols="20"  class="form-control" name="motivo_jefe" placeholder="Especifica el motivo" required></textarea>
										<style>
									textarea{resize: none;}
										</style>
							</div>
							
							<button type="submit" name="submit" class="btn btn-primary">Agregar</button>
						</form>
					
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

	<?php include "php/tabla_habitantes.php"; ?>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<?php include("footer.php");?>
	</body>
</html>