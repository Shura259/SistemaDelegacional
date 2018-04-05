<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_reunion"]) &&isset($_POST["lugar_reunion"]) &&isset($_POST["fecha_reunion"]) &&isset($_POST["hora_reunion"]) &&isset($_POST["descripcion"])){
		if($_POST["tipo_reunion"]!=""&&$_POST["lugar_reunion"]!=""&&$_POST["fecha_reunion"]!=""&&$_POST["hora_reunion"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";
			
			$sql = "update reuniones set tipo_reunion=\"$_POST[tipo_reunion]\",lugar_reunion=\"$_POST[lugar_reunion]\",fecha_reunion=\"$_POST[fecha_reunion]\",hora_reunion=\"$_POST[hora_reunion]\",descripcion=\"$_POST[descripcion]\" where id_reunion=".$_POST["id_reunion"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver_reuniones.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver_reuniones.php';</script>";

			}
		}
	}
}



?>