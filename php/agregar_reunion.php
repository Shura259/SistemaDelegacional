<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_reunion"]) &&isset($_POST["lugar_reunion"]) &&isset($_POST["fecha_reunion"]) &&isset($_POST["hora_reunion"]) &&isset($_POST["descripcion"])){
		if($_POST["tipo_reunion"]!=""&& $_POST["lugar_reunion"]!=""&&$_POST["fecha_reunion"]!=""&&$_POST["hora_reunion"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";
			
			$sql = "insert into reuniones(tipo_reunion,lugar_reunion,fecha_reunion,hora_reunion,descripcion) value (\"$_POST[tipo_reunion]\",\"$_POST[lugar_reunion]\",\"$_POST[fecha_reunion]\",\"$_POST[hora_reunion]\",\"$_POST[descripcion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver_reuniones.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver_reuniones.php';</script>";

			}
		}
	}
}



?>