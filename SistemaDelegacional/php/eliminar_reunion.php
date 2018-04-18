<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM reuniones WHERE id_reunion=".$_GET["id_reunion"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver_reuniones.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ver_reuniones.php';</script>";

			}
}

?>