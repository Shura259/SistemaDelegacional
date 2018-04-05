<?php

if(!empty($_POST)){
	if(isset($_POST["nombre_jefe"]) &&isset($_POST["apellido_paterno_jefe"]) &&isset($_POST["apellido_materno_jefe"]) &&isset($_POST["fecha_nacimiento_jefe"]) &&isset($_POST["especifica_religion"]) &&isset($_POST["motivo_jefe"]) &&isset($_POST["domicilio_jefe"]) &&isset($_POST["monto_cuota"])){
		if($_POST["nombre_jefe"]!=""&& $_POST["apellido_paterno_jefe"]!=""&&$_POST["apellido_materno_jefe"]!=""&&$_POST["fecha_nacimiento_jefe"]!=""&&$_POST["especifica_religion"]!=""&&$_POST["motivo_jefe"]!=""&&$_POST["domicilio_jefe"]!=""&&$_POST["monto_cuota"]!=""){
			include "conexion.php";
			
			$sql = "insert into jefe_familia(nombre_jefe,apellido_paterno_jefe,apellido_materno_jefe,fecha_nacimiento_jefe,especifica_religion,motivo_jefe,domicilio_jefe,monto_cuota) value (\"$_POST[nombre_jefe]\",\"$_POST[apellido_paterno_jefe]\",\"$_POST[apellido_materno_jefe]\",\"$_POST[fecha_nacimiento_jefe]\",\"$_POST[especifica_religion]\",\"$_POST[motivo_jefe]\",\"$_POST[domicilio_jefe]\",\"$_POST[monto_cuota]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>