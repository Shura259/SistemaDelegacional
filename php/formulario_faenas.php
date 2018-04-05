<?php
	include "conexion.php";

		$user_id=null;
		$sql1= "select * from faenas where id_faena= ".$_GET["id_faena"];
		$query = $con->query($sql1);
		$faenas = null;
		if($query->num_rows>0){
		while ($r=$query->fetch_object()){
			$faenas=$r;
			break;
			}

			  }
?>

	<?php if($faenas!=null):?>

		<form role="form" method="post" action="php/actualizar_faena.php">
			
														
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
					<input type="text" class="form-control" value="<?php echo $faenas->lugar; ?>" name="lugar" placeholder="Lugar de Faena" required >
			</div>
														
			<div class="form-group">
				<label for="fecha">Fecha de Faena:</label>
					<input type="date" class="form-control" value="<?php echo $faenas->fecha; ?>" name="fecha" required >
			</div>
							
			<div class="form-group">
				<label for="hora">Hora de Faena:</label>
					<input type="time" class="form-control" value="<?php echo $faenas->hora; ?>" name="hora" required >
			</div>
							
			<div class="form-group">
				<label for="descripcion">Descripcion de Faena:</label>
					<textarea class="form-control" value="<?php echo $faenas->descripcion; ?>" name="descripcion" placeholder="Escribe aqui..." value="" required ></textarea>
						<style>
							textarea{resize: none;}
						</style>
			</div>

				<input type="hidden" name="id_faena" value="<?php echo $faenas->id_faena; ?>">
					 <button type="submit" class="btn btn-default">Actualizar</button>
		</form>
				<?php else:?>
					 <p class="alert alert-danger">404 No se encuentra</p>
				<?php endif;?>