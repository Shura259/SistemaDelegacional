<?php
	include "conexion.php";

		$user_id=null;
		$sql1= "select * from jefe_familia where id_jefe= ".$_GET["id_jefe"];
		$query = $con->query($sql1);
		$jefe_familia = null;
		if($query->num_rows>0){
		while ($r=$query->fetch_object()){
			$jefe_familia=$r;
			break;
			}

			  }
?>

	<?php if($jefe_familia!=null):?>
	
	<?php 
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
	

		<form role="form" method="post" action="php/actualizar.php">
			
			<div class="form-group">
								<label for="categoria">Categoria:</label>
								<select name="categoria" class="form-control">
								<option selected="selected"><?php echo $jefe_familia->categoria; ?></option> 
								<option  value="Comunero">Comunero</option> 				
								</select>	
			</div>

			<div class="form-group">
				<label for="fecha_inicio">Fecha de Inicio como Ejidatario:</label>
					<input type="date" class="form-control" value="<?php echo $jefe_familia->fecha_inicio; ?>" name="fecha_inicio">
			</div>
							
			<div class="form-group">
				<label for="fecha_termino">Fecha de Termino como Ejidatario:</label>
					<input type="date" class="form-control" value="<?php echo $jefe_familia->fecha_termino; ?>" name="fecha_termino">
			</div>
			
			<div class="form-group">
				<label for="nombre_jefe">Nombre(S):</label>
					<input type="text" class="form-control" value="<?php echo $jefe_familia->nombre_jefe; ?>"  name="nombre_jefe" placeholder="Nombre" required >
			</div>
							
			<div class="form-group">
				<label for="apellido_paterno">Apellido Paterno:</label>
					<input type="text" class="form-control" value="<?php echo $jefe_familia->apellido_paterno_jefe; ?>" name="apellido_paterno_jefe" placeholder="Apellido Paterno" required >
			</div>
							
			<div class="form-group">
				<label for="apellido_materno">Apellido Materno:</label>
					<input type="text" class="form-control"  value="<?php echo $jefe_familia->apellido_materno_jefe; ?>" name="apellido_materno_jefe" placeholder="Apellido Materno" required >
			</div>
							
			<div class="form-group">
				<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
					<input type="date" class="form-control" value="<?php echo $jefe_familia->fecha_nacimiento_jefe; ?>" name="fecha_nacimiento_jefe" required >
			</div>
							
			<div class="form-group">
								<label for="sexo">Sexo:</label>
								<select name="sexo" class="form-control">
								<option selected="selected"><?php echo $jefe_familia->sexo; ?></option> 
								<option  value="Hombre">Hombre</option> 
								<option  value="Mujer">Mujer</option> 								
								</select>	
			</div>
			
			<div class="form-group">
								<label for="religion">Religion:</label>
								<select name="religion" class="form-control">
								<option selected="selected"><?php echo $jefe_familia->religion; ?></option> 
								<?php echo $combobit; ?>
								<option name="otra">Otra</option>								
								</select>	
			</div>
			
			<div id="especifica_religion" class="form-group">
				<label for="especifica_religion">Especifica religion</label>
					<input type="text" class="form-control"  value="<?php echo $jefe_familia->especifica_religion; ?>" name="especifica_religion" placeholder="Escribe aqui..." required>
			</div>
			
			<div class="form-group">
				<label for="servicio">Servicios con los que cuenta</label><br>
					<input  type="checkbox" name="servicio" id="servicio1" value="Luz">		Luz <br>
					<input  type="checkbox" name="servicio" id="servicio2" value="Agua">    	Agua <br>
					<input  type="checkbox" name="servicio" id="servicio3" value="Drenaje">    	Drenaje
			</div>
							
			<div class="form-group">
				<label for="reside">El Habitante Reside aqui:</label> <br>
					<input type="radio" name="reside" id="reside1" value="Si"> Si<p>
					<input type="radio" name="reside" id="reside2" value="No"> No
			</div>
			
			<div  id="motivo_jefe" class="form-group">
				<label for="motivo_jefe">Especifica el  motivo:</label>
					<textarea rows="4" cols="20" class="form-control" name="motivo_jefe" placeholder="Especifica el motivo" required><?php echo $jefe_familia->motivo_jefe; ?></textarea>
						<style>
							textarea{resize: none;}
						</style>
			</div>
							
			<div class="form-group">
				<label for="domicilio">Domicilio completo</label>
					<input type="text" class="form-control"  value="<?php echo $jefe_familia->domicilio; ?>" name="domicilio" placeholder="Domicilio completo" required>
			</div>
							
			<div class="form-group">
				<label for="monto_cuota">Monto de cuota</label>
					<input type="number" class="form-control" value="<?php echo $jefe_familia->monto_cuota; ?>" name="monto_cuota" placeholder="$" required>
			</div>

					<input type="hidden" name="id_jefe" value="<?php echo $jefe_familia->id_jefe; ?>">
					  <button type="submit" class="btn btn-default">Actualizar</button>
					</form>
					<?php else:?>
					  <p class="alert alert-danger">404 No se encuentra</p>
					<?php endif;?>