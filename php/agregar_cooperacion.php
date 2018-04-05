<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_cooperacion"]) &&isset($_POST["concepto"]) &&isset($_POST["cantidad"]) &&isset($_POST["descripcion"]) &&isset($_POST["beneficiarios"]) &&isset($_POST["fecha_cooperacion"]) &&isset($_POST["fecha_limite"])){
		if($_POST["tipo_cooperacion"]!=""&& $_POST["concepto"]!=""&&$_POST["cantidad"]!=""&&$_POST["descripcion"]!=""&&$_POST["beneficiarios"]!=""&&$_POST["fecha_cooperacion"]!=""&&$_POST["fecha_limite"]!=""){
			include "conexion.php";
			
			$sql = "insert into cooperaciones(tipo_cooperacion,concepto,cantidad,descripcion,beneficiarios,fecha_cooperacion,fecha_limite) value (\"$_POST[tipo_cooperacion]\",\"$_POST[concepto]\",\"$_POST[cantidad]\",\"$_POST[descripcion]\",\"$_POST[beneficiarios]\",\"$_POST[fecha_cooperacion]\",\"$_POST[fecha_limite]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver_cooperaciones.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver_cooperaciones.php';</script>";

			}
		}
	}
}



?>