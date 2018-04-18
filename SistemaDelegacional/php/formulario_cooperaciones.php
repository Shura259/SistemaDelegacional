<?php
	include "conexion.php";

		$user_id=null;
		$sql1= "select * from cooperaciones where id_cooperacion= ".$_GET["id_cooperacion"];
		$query = $con->query($sql1);
		$cooperaciones = null;
		if($query->num_rows>0){
		while ($r=$query->fetch_object()){
			$cooperaciones=$r;
			break;
			}

			  }
?>

	<?php if($cooperaciones!=null):?>

		<form role="form" method="post" action="php/actualizar_cooperacion.php">
			
														
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
					<input type="text" class="form-control" value="<?php echo $cooperaciones->concepto; ?>"  name="concepto" placeholder="Concepto de Cooperacion" required >
			</div>
				
			<div class="form-group">
				<label for="cantidad">Cantidad $:</label>
					<input type="number" class="form-control" value="<?php echo $cooperaciones->cantidad; ?>"  name="cantidad" placeholder="$" required >
			</div>
							
			<div class="form-group">
				<label for="descripcion">Descripcion de Cooperacion:</label>
					<textarea class="form-control" name="descripcion" placeholder="Escribe aqui..." required ><?php echo $cooperaciones->descripcion; ?></textarea>
						<style>
							textarea{resize: none;}
						</style>
			</div>
							
			<div class="form-group">
				<label for="beneficiarios">Beneficiarios de Cooperacion:</label>
					<input type="text" class="form-control" value="<?php echo $cooperaciones->beneficiarios; ?>"  name="beneficiarios" placeholder="Escribe aqui" required >
			</div>
							
			<div class="form-group">
				<label for="fecha_cooperacion">Fecha de Registro de Cooperacion:</label>
					<input type="date" class="form-control" value="<?php echo $cooperaciones->fecha_cooperacion; ?>"  name="fecha_cooperacion" required >
			</div>
							
			<div class="form-group">
				<label for="fecha_limite">Fecha Limite de pago:</label>
					<input type="date" class="form-control" value="<?php echo $cooperaciones->fecha_limite; ?>"  name="fecha_limite" required >
			</div>

				<input type="hidden" name="id_cooperacion" value="<?php echo $cooperaciones->id_cooperacion; ?>">
					 <button type="submit" class="btn btn-default">Actualizar</button>
		</form>
				<?php else:?>
					 <p class="alert alert-danger">404 No se encuentra</p>
				<?php endif;?>