<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from cargo_persona";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-hover" style="font-size: 14px;">
<thead bgcolor="Aliceblue">
	<th>No.</th>
	<th>Nombre</th>
	<th>Cargo</th>
	<th>Inicio</th>
	<th>Termino</th>
	<th>Trabajos Realizados</th>
	<th>Trabajos Pendientes</th>
	<th><center>Acciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["id_cargo_persona"]; ?></td>
	<td><?php echo $r["nombre_habitante"]; ?></td>
	<td><?php echo $r["id_cargo"]; ?></td>
	<td><?php echo $r["inicio_cargo"]; ?></td>
	<td><?php echo $r["fin_cargo"]; ?></td>
	<td><?php echo $r["trabajos_realizados"]; ?></td>
	<td><?php echo $r["trabajos_pendientes"]; ?></td>
	<td colspan="4" align="center" style="width:100px;" bgcolor="lavender">
		<a href="#" class="btn btn-xs">Ver detalles</a>
		<a href="./editar_cargo.php?id_cargo_persona=<?php echo $r["id_cargo_persona"];?>" class="btn btn-warning btn-xs">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
