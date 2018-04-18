<?php

if(!empty($_POST)){
	if(isset($_POST["fecha_inicio"]) &&isset($_POST["fecha_termino"]) &&isset($_POST["nombre_jefe"]) &&isset($_POST["apellido_paterno_jefe"]) &&isset($_POST["apellido_materno_jefe"]) &&isset($_POST["fecha_nacimiento_jefe"]) &&isset($_POST["categoria"])  &&isset($_POST["sexo"]) &&isset($_POST["religion"]) &&isset($_POST["especifica_religion"]) &&isset($_POST["servicio"])  &&isset($_POST["reside"]) &&isset($_POST["motivo_jefe"]) &&isset($_POST["domicilio"]) &&isset($_POST["nuevo"]) &&isset($_POST["monto_cuota"])){
		if($_POST["fecha_inicio"]!=""&& $_POST["fecha_termino"]!=""&& $_POST["nombre_jefe"]!=""&& $_POST["apellido_paterno_jefe"]!=""&&$_POST["apellido_materno_jefe"]!=""&&$_POST["fecha_nacimiento_jefe"]!=""&&$_POST["categoria"]!=""&&$_POST["sexo"]!=""&&$_POST["religion"]!=""&&$_POST["especifica_religion"]!=""&&$_POST["servicio"]!=""&& $_POST["reside"]!=""&&$_POST["motivo_jefe"]!=""&&$_POST["domicilio"]!=""&&$_POST["nuevo"]!=""&&$_POST["monto_cuota"]!=""){
			include "conexion.php";
			
			$sql = "insert into jefe_familia(fecha_inicio,fecha_termino,nombre_jefe,apellido_paterno_jefe,apellido_materno_jefe,fecha_nacimiento_jefe,categoria,sexo,religion,especifica_religion,servicio,reside,motivo_jefe,domicilio,nuevo,monto_cuota) value (\"$_POST[fecha_inicio]\",\"$_POST[fecha_termino]\",\"$_POST[nombre_jefe]\",\"$_POST[apellido_paterno_jefe]\",\"$_POST[apellido_materno_jefe]\",\"$_POST[fecha_nacimiento_jefe]\",\"$_POST[categoria]\",\"$_POST[sexo]\",\"$_POST[religion]\",\"$_POST[especifica_religion]\",\"$_POST[servicio]\",\"$_POST[reside]\",\"$_POST[motivo_jefe]\",\"$_POST[domicilio]\",\"$_POST[nuevo]\",\"$_POST[monto_cuota]\")";
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