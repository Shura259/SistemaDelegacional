<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from cooperaciones";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

<table class="table  table-hover"  style="font-size: 14px;">
<thead bgcolor="Aliceblue">
	<th>No.</th>
	<th>Tipo</th>
	<th>Concepto</th>
	<th>Cantidad</th>
	<th>Descripcion</th>
	<th>Beneficiarios</th>
	<th>Fecha Registro</th>
	<th>Fecha Limite</th>
	<th><center>Acciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["id_cooperacion"]; ?></td>
	<td><?php echo $r["tipo_cooperacion"]; ?></td>
	<td><?php echo $r["concepto"]; ?></td>
	<td><?php echo $r["cantidad"]; ?></td>
	<td><?php echo $r["descripcion"]; ?></td>
	<td><?php echo $r["beneficiarios"]; ?></td>
	<td><?php echo $r["fecha_cooperacion"]; ?></td>
	<td><?php echo $r["fecha_limite"]; ?></td>
	<td colspan="4" align="center" style="width:30px;" bgcolor="lavender">
		<a href="./editar_cooperacion.php?id_cooperacion=<?php echo $r["id_cooperacion"];?>" class="btn btn-warning btn-xs">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
