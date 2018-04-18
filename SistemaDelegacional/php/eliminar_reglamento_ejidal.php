<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM reglamento_ejidal WHERE id_reglamento_ejidal=".$_GET["id_reglamento_ejidal"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver_reglamento_ejidal.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ver_reglamento_ejidal.php';</script>";

			}
}

?>