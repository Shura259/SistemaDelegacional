<?php
	include "conexion.php";

		$user_id=null;
		$sql1= "select * from reglamento_interno where id_reglamento_interno= ".$_GET["id_reglamento_interno"];
		$query = $con->query($sql1);
		$reglamento_interno = null;
		if($query->num_rows>0){
		while ($r=$query->fetch_object()){
			$reglamento_interno=$r;
			break;
			}

			  }
?>

	<?php if($reglamento_interno!=null):?>

		<form role="form" method="post" action="php/actualizar_reglamento_interno.php">
			
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
								<input type="text" class="form-control" value="<?php echo $reglamento_interno->nombre; ?>" name="nombre" placeholder="Nombre de la regla" value="" required >
							</div>
							
							<div  id="descripcion" class="form-group">
								<label for="descripcion">Describe la Regla:</label>
								<textarea rows="4" cols="20"  class="form-control" name="descripcion" placeholder="Escribe aquí..." required><?php echo $reglamento_interno->descripcion; ?></textarea>
										<style>
									textarea{resize: none;}
										</style>
							</div>
						
				<input type="hidden" name="id_reglamento_interno" value="<?php echo $reglamento_interno->id_reglamento_interno; ?>">
					 <button type="submit" class="btn btn-default">Actualizar</button>
		</form>
				<?php else:?>
					 <p class="alert alert-danger">404 No se encuentra</p>
				<?php endif;?>