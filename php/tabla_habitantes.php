<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from jefe_familia";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

<table class="table  table-hover"  style="font-size: 14px;">
<thead bgcolor="Aliceblue">
	<th>No.</th>
	<th>Nombre</th>
	<th>Apellido Pat</th>
	<th>Apellido Mat</th>
	<th>Fecha Nacimiento</th>
	<th>Categoria</th>
	<th><center>Acciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["id_jefe"]; ?></td>
	<td><?php echo $r["nombre_jefe"]; ?></td>
	<td><?php echo $r["apellido_paterno_jefe"]; ?></td>
	<td><?php echo $r["apellido_materno_jefe"]; ?></td>
	<td><?php echo $r["fecha_nacimiento_jefe"]; ?></td>
	<td><?php echo $r["categoria"]; ?></td>
	<td colspan="4" align="center" style="width:200px;" bgcolor="lavender">
		<a href="editar_usuarios.php" class="btn btn-xs">Ver detalles</a>
		<a href="eliminar_usuarios.php" class="btn btn-xs">Historial</a> 
		<a href="./editar.php?id_jefe=<?php echo $r["id_jefe"];?>" class="btn btn-warning btn-xs">Editar</a>
		<a href="#" id="del-<?php echo $r["id_jefe"];?>" class="btn btn-sm btn-danger btn-xs">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id_jefe"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id_jefe="+<?php echo $r["id_jefe"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
