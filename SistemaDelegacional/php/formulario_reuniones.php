<?php
	include "conexion.php";

		$user_id=null;
		$sql1= "select * from reuniones where id_reunion= ".$_GET["id_reunion"];
		$query = $con->query($sql1);
		$reuniones = null;
		if($query->num_rows>0){
		while ($r=$query->fetch_object()){
			$reuniones=$r;
			break;
			}

			  }
?>

	<?php if($reuniones!=null):?>

		<form role="form" method="post" action="php/actualizar_reunion.php">
			
			<div class="form-group">
				<label for="tipo_reunion">Tipo de Reunion</label>
					<select name="tipo_reunion" class="form-control">
						<option selected="selected">--Selecciona--</option> 
						<option value="General">General</option> 			
						<option value="Ejidal">Ejidal</option>				
					</select>	
			</div>

			<div class="form-group">
				<label for="lugar_reunion">Lugar de Reunion:</label>
					<input type="text" class="form-control" value="<?php echo $reuniones->lugar_reunion; ?>"  name="lugar_reunion" placeholder="Lugar de Reunion" required>
			</div>
														
			<div class="form-group">
				<label for="fecha_reunion">Fecha de Reunion:</label>
					<input type="date" class="form-control" value="<?php echo $reuniones->fecha_reunion; ?>"  name="fecha_reunion" required>
			</div>
							
			<div class="form-group">
				<label for="hora_reunion">Hora de Reunion:</label>
					<input type="time" class="form-control" value="<?php echo $reuniones->hora_reunion; ?>"  name="hora_reunion" required>
			</div>
							
			<div class="form-group">
				<label for="descripcion">Descripcion de Reunion:</label>
					<textarea class="form-control" name="descripcion"  placeholder="Escribe aqui..."><?php echo $reuniones->descripcion; ?></textarea>
						<style>
							textarea{resize: none;}
						</style>
			</div>

				<input type="hidden" name="id_reunion" value="<?php echo $reuniones->id_reunion; ?>">
					 <button type="submit" class="btn btn-default">Actualizar</button>
		</form>
				<?php else:?>
					 <p class="alert alert-danger">404 No se encuentra</p>
				<?php endif;?>