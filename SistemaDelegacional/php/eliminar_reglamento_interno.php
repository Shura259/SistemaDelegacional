<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM reglamento_interno WHERE id_reglamento_interno=".$_GET["id_reglamento_interno"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver_reglamento_interno.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ver_reglamento_interno.php';</script>";

			}
}

?>