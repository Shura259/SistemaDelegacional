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

		<form role="form" method="post" action="php/actualizar.php">
			
			<div class="form-group">
				<label for="categoria">Categoria:</label>
					<input type="text" class="form-control" value="<?php echo $jefe_familia->categoria; ?>"  name="categoria" required >
			</div>
			
			<div class="form-group">
				<label for="nombre">Nombre(S):</label>
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
							
			<div id="especifica_otra" class="form-group">
				<label for="especifica">Especifica religion</label>
					<input type="text" class="form-control"  value="<?php echo $jefe_familia->especifica_religion; ?>" name="especifica_religion" placeholder="Escribe aqui..." required>
			</div>
							
			<div  id="motivo" class="form-group">
				<label for="motivo" class="col-md-4 control-label">Especifica el  motivo:</label>
					<textarea rows="4" cols="20"  class="form-control" value="<?php echo $jefe_familia->motivo_jefe; ?>" name="motivo_jefe" placeholder="Especifica el motivo" required></textarea>
						<style>
							textarea{resize: none;}
						</style>
			</div>
							
			<div class="form-group">
				<label for="domicilio">Domicilio completo</label>
					<input type="text" class="form-control"  value="<?php echo $jefe_familia->domicilio_jefe; ?>" name="domicilio_jefe" placeholder="Domicilio completo" required>
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