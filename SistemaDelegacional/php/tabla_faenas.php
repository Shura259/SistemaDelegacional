<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from faenas";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

<table class="table  table-hover"  style="font-size: 14px;">
<thead bgcolor="Aliceblue">
	<th>No.</th>
	<th>Tipo</th>
	<th>Lugar</th>
	<th>Fecha</th>
	<th>Hora</th>
	<th>Descripcion</th>
	<th><center>Acciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["id_faena"]; ?></td>
	<td><?php echo $r["tipo_faena"]; ?></td>
	<td><?php echo $r["lugar"]; ?></td>
	<td><?php echo $r["fecha"]; ?></td>
	<td><?php echo $r["hora"]; ?></td>
	<td><?php echo $r["descripcion"]; ?></td>
	<td colspan="4" align="center" style="width:30px;" bgcolor="lavender">
		<a href="./editar_faena.php?id_faena=<?php echo $r["id_faena"];?>" class="btn btn-warning btn-xs">Editar</a>
		<a href="#" id="del-<?php echo $r["id_faena"];?>" class="btn btn-sm btn-danger btn-xs">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id_faena"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar_faena.php?id_faena="+<?php echo $r["id_faena"];?>;

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
