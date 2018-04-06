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
								<label for="cargo">Selecciona un cargo:</label>
									<input  name="cargo">
			<select name="cargo" class="form-control" value="<?php echo $cargo_persona->cargo; ?>" required>
										<option selected="selected">--Elige un cargo--</option>
											<optgroup label="">
													<option value="Delegacion: Delegado">Delegacion: Delegado</option>
													<option value="Delegacion: Subdelegado">Delegacion: Subdelegado</option>
													<option value="Delegacion: Comandante">Delegacion: Comandante</option>
													<option value="Delegacion: Policia">Delegacion: Policia</option>
													<option value="Delegacion: Secretario">Delegacion: Secretario</option>
													<option valuee="Delegacion: Tesorero">Delegacion: Tesorero</option>
													<option value="Delegacion: Vocal">Delegacion: Vocal</option>
													<option value="Delegacion: Mayordomia">Delegacion: Mayordomia</option>
												</optgroup>
												<optgroup label="">
													<option value="Comite de Obra: Presidente">Comite de Obra: Presidente</option>
													<option value="Comite de Obra: Secretario">Comite de Obra: Secretario</option>
													<option value="Comite de Obra: Tesorero">Comite de Obra: Tesorero</option>
													<option value="Comite de Obra: Vocal">Comite de Obra: Vocal</option>
												</optgroup>
												<optgroup label="">
													<option value="Comite de Eventos: Presidente">Comite de Eventos: Presidente</option>
													<option value="Comite de Eventos: Vocal">Comite de Eventos: Vocal</option>
												</optgroup>
												<optgroup label="">
													<option value="Ejido: Presidente">Ejido: Presidente</option>
													<option value="Ejido: Vicepresidente">Ejido: Vicepresidente</option>
													<option value="Ejido: Secretario">Ejido: Secretario</option>
													<option value="Ejido: Tesorero">Ejido: Tesorero</option>
													<option value="Ejido: Vocal">Ejido: Vocal</option>
												</optgroup>
												<optgroup label="">
													<option value="Consejo de Vigilancia: Presidente">Consejo de Vigilancia: Presidente</option>
													<option value="Consejo de Vigilancia: Secretario">Consejo de Vigilancia: Secretario</option>
													<option value="Consejo de Vigilancia: Tesorero">Consejo de Vigilancia: Tesorero</option>
													<option value="Consejo de Vigilancia: Vocal">Consejo de Vigilancia: Vocal</option>
												</optgroup>
												<optgroup label="">
													<option value="Obras de Ejidatario: Presidente">Obras de Ejidatario: Presidente</option>
													<option value="Obras de Ejidatario: Secretario">Obras de Ejidatario: Secretario</option>
													<option value="Obras de Ejidatario: Tesorero">Obras de Ejidatario: Tesorero</option>
													<option value="Obras de Ejidatario: Vocal">Obras de Ejidatario: Vocal</option>
												</optgroup>
												<optgroup label="">
													<option value="otros">Otro</option>
												</optgroup>
											
										</select>
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