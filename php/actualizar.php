<?php

if(!empty($_POST)){
	if(isset($_POST["nombre_jefe"]) &&isset($_POST["apellido_paterno_jefe"]) &&isset($_POST["apellido_materno_jefe"]) &&isset($_POST["fecha_nacimiento_jefe"]) &&isset($_POST["categoria"]) &&isset($_POST["especifica_religion"]) &&isset($_POST["motivo_jefe"]) &&isset($_POST["domicilio_jefe"]) &&isset($_POST["monto_cuota"])){
		if($_POST["nombre_jefe"]!=""&& $_POST["apellido_paterno_jefe"]!=""&&$_POST["apellido_materno_jefe"]!=""&&$_POST["fecha_nacimiento_jefe"]!=""&&$_POST["categoria"]!=""&&$_POST["especifica_religion"]!=""&&$_POST["motivo_jefe"]!=""&&$_POST["domicilio_jefe"]!=""&&$_POST["monto_cuota"]!=""){
			include "conexion.php";
			
			$sql = "update jefe_familia set nombre_jefe=\"$_POST[nombre_jefe]\",apellido_paterno_jefe=\"$_POST[apellido_paterno_jefe]\",apellido_materno_jefe=\"$_POST[apellido_materno_jefe]\",fecha_nacimiento_jefe=\"$_POST[fecha_nacimiento_jefe]\",categoria=\"$_POST[categoria]\",especifica_religion=\"$_POST[especifica_religion]\",motivo_jefe=\"$_POST[motivo_jefe]\",domicilio_jefe=\"$_POST[domicilio_jefe]\",monto_cuota=\"$_POST[monto_cuota]\" where id_jefe=".$_POST["id_jefe"];
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