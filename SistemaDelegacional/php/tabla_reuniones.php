<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from reuniones";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

<table class="table  table-hover"  style="font-size: 14px;">
<thead bgcolor="Aliceblue">
	<th>No.</th>
	<th>Tipo</th>
	<th>Lugar de Reunion</th>
	<th>Fecha Programada</th>
	<th>Hora</th>
	<th>Descripcion</th>
	<th><center>Acciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["id_reunion"]; ?></td>
	<td><?php echo $r["tipo_reunion"]; ?></td>
	<td><?php echo $r["lugar_reunion"]; ?></td>
	<td><?php echo $r["fecha_reunion"]; ?></td>
	<td><?php echo $r["hora_reunion"]; ?></td>
	<td><?php echo $r["descripcion"]; ?></td>
	<td colspan="4" align="center" style="width:70px;" bgcolor="lavender">
		<a href="./editar_reunion.php?id_reunion=<?php echo $r["id_reunion"];?>" class="btn btn-warning btn-xs">Editar</a>
		<a href="#" id="del-<?php echo $r["id_reunion"];?>" class="btn btn-sm btn-danger btn-xs">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id_reunion"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar_reunion.php?id_reunion="+<?php echo $r["id_reunion"];?>;

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
