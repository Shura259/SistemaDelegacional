<?php

if(!empty($_POST)){
	if(isset($_POST["fecha_inicio"]) &&isset($_POST["fecha_termino"]) &&isset($_POST["nombre_jefe"]) &&isset($_POST["apellido_paterno_jefe"]) &&isset($_POST["apellido_materno_jefe"]) &&isset($_POST["fecha_nacimiento_jefe"]) &&isset($_POST["categoria"])  &&isset($_POST["sexo"]) &&isset($_POST["religion"]) &&isset($_POST["especifica_religion"]) &&isset($_POST["servicio"])  &&isset($_POST["reside"]) &&isset($_POST["motivo_jefe"]) &&isset($_POST["domicilio"]) &&isset($_POST["nuevo"]) &&isset($_POST["monto_cuota"])){
		if($_POST["fecha_inicio"]!=""&& $_POST["fecha_termino"]!=""&& $_POST["nombre_jefe"]!=""&& $_POST["apellido_paterno_jefe"]!=""&&$_POST["apellido_materno_jefe"]!=""&&$_POST["fecha_nacimiento_jefe"]!=""&&$_POST["categoria"]!=""&&$_POST["sexo"]!=""&&$_POST["religion"]!=""&&$_POST["especifica_religion"]!=""&&$_POST["servicio"]!=""&& $_POST["reside"]!=""&&$_POST["motivo_jefe"]!=""&&$_POST["domicilio"]!=""&&$_POST["nuevo"]!=""&&$_POST["monto_cuota"]!=""){
			include "conexion.php";
			
			$sql = "update jefe_familia set fecha_inicio=\"$_POST[fecha_inicio]\",fecha_termino=\"$_POST[fecha_termino]\",nombre_jefe=\"$_POST[nombre_jefe]\",apellido_paterno_jefe=\"$_POST[apellido_paterno_jefe]\",apellido_materno_jefe=\"$_POST[apellido_materno_jefe]\",fecha_nacimiento_jefe=\"$_POST[fecha_nacimiento_jefe]\",categoria=\"$_POST[categoria]\",sexo=\"$_POST[sexo]\",religion=\"$_POST[religion]\",especifica_religion=\"$_POST[especifica_religion]\",servicio=\"$_POST[servicio]\",reside=\"$_POST[reside]\",motivo_jefe=\"$_POST[motivo_jefe]\",domicilio=\"$_POST[domicilio]\",nuevo=\"$_POST[nuevo]\",monto_cuota=\"$_POST[monto_cuota]\" where id_jefe=".$_POST["id_jefe"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>