<?php
	include "conexion.php";

		$user_id=null;
		$sql1= "select * from cargo_persona where id_cargo_persona= ".$_GET["id_cargo_persona"];
		$query = $con->query($sql1);
		$cargo_persona = null;
		if($query->num_rows>0){
		while ($r=$query->fetch_object()){
			$cargo_persona=$r;
			break;
			}

			  }
?>

	<?php if($cargo_persona!=null):?>

		<form role="form" method="post" action="php/actualizar_cargo.php">
			
			<div class="form-group">
				<label for="nombre">Nombre de Habitante:</label>
					<input type="text" class="form-control" value="<?php echo $cargo_persona->nombre_habitante; ?>"   name="nombre_habitante" placeholder="Nombre" required >
			</div>
							
							
			<div class="form-group">
				<label for="inicio_cargo">Fecha de Inicio de Cargo:</label>
					<input type="date" class="form-control" value="<?php echo $cargo_persona->inicio_cargo; ?>"   name="inicio_cargo" required>
			</div>
							
			<div class="form-group">
				<label for="fin_cargo">Fecha de Termino de Cargo:</label>
					<input type="date" class="form-control" value="<?php echo $cargo_persona->fin_cargo; ?>"   name="fin_cargo" required>
			</div>
							
			<div class="form-group">
				<label for="trabajos_realizados"> Trabajos Realizados:</label>
					<textarea rows="4" cols="20" class="form-control" value="<?php echo $cargo_persona->trabajos_realizados; ?>"   name="trabajos_realizados" placeholder="Escribe aqui..."></textarea>
						<style>
							textarea{resize: none;}
						</style>
			</div>
							
			<div class="form-group">
				<label for="trabajos_pendientes">Trabajos Pendientes</label>
					<textarea rows="4" cols="20" class="form-control" value="<?php echo $cargo_persona->trabajos_pendientes; ?>"   name="trabajos_pendientes" placeholder="Escribe aqui..."></textarea>
						<style>
							textarea{resize: none;}
						</style>
			</div>

				<input type="hidden" name="id_cargo_persona" value="<?php echo $cargo_persona->id_cargo_persona; ?>">
					 <button type="submit" class="btn btn-default">Actualizar</button>
		</form>
				<?php else:?>
					 <p class="alert alert-danger">404 No se encuentra</p>
				<?php endif;?>