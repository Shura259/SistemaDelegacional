<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from jefe_familia ORDER BY `jefe_familia`.`apellido_paterno_jefe` ASC";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<style type="text/css">

th, td {
   border-bottom: 1px solid #f5f5f5;
}
</style>

<table class="table  table-hover"  style="font-size: 14px;">

<thead bgcolor="Aliceblue" HEIGHT="50">
	<th>No.</th>
	<th>Categoria</th>
	<th>Nombre</th>
	<th>Ap.Paterno</th>
	<th>Ap.Materno</th>
	<th>Edad</th>
	<th>Sexo</th>
	<th>Religion</th>
	<th>Reside Aqui</th>
	<th>Domicilio</th>
	<th><center>Acciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["id_jefe"]; ?></td>
	<td><?php echo $r["categoria"]; ?></td>
	<td><?php echo $r["nombre_jefe"]; ?></td>
	<td><?php echo $r["apellido_paterno_jefe"]; ?></td>
	<td><?php echo $r["apellido_materno_jefe"]; ?></td>
	<td><?php echo $r["fecha_nacimiento_jefe"]; ?></td>
	<td><?php echo $r["sexo"]; ?></td>
	<td><?php echo $r["religion"]; ?></td>
	<td><?php echo $r["reside"]; ?></td>
	<td><?php echo $r["domicilio"]; ?></td>
	<td colspan="4" align="center" bgcolor="lavender">
		<a href="ver_detalles.php" class="btn btn-xs">Ver detalles</a>
		<a href="#" class="btn btn-xs">Historial</a> 
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
