<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from reglamento_ejidal;
";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

<table class="table  table-hover"  style="font-size: 14px;">
<thead bgcolor="Aliceblue">
	<th>No.</th>
	<th>Categoria</th>
	<th>Nombre de Regla</th>
	<th>Descripcion</th>
	<th><center>Acciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["id_reglamento_ejidal"]; ?></td>
	<td><?php echo $r["categoria"]; ?></td>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["descripcion"]; ?></td>
	<td colspan="4" align="center" style="width:30px;" bgcolor="lavender">
		<a href="./editar_reglamento_ejidal.php?id_reglamento_ejidal=<?php echo $r["id_reglamento_ejidal"];?>" class="btn btn-warning btn-xs">Editar</a>
		<a href="#" id="del-<?php echo $r["id_reglamento_ejidal"];?>" class="btn btn-sm btn-danger btn-xs">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id_reglamento_ejidal"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar_reglamento_ejidal.php?id_reglamento_ejidal="+<?php echo $r["id_reglamento_ejidal"];?>;

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
