<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_cooperacion"]) &&isset($_POST["concepto"]) &&isset($_POST["cantidad"]) &&isset($_POST["descripcion"]) &&isset($_POST["beneficiarios"]) &&isset($_POST["fecha_cooperacion"]) &&isset($_POST["fecha_limite"])){
		if($_POST["tipo_cooperacion"]!=""&&$_POST["concepto"]!=""&&$_POST["cantidad"]!=""&&$_POST["descripcion"]!=""&&$_POST["beneficiarios"]!=""&&$_POST["fecha_cooperacion"]!=""&&$_POST["fecha_limite"]!=""){
			include "conexion.php";
			
			$sql = "update cooperaciones set tipo_cooperacion=\"$_POST[tipo_cooperacion]\",concepto=\"$_POST[concepto]\",cantidad=\"$_POST[cantidad]\",descripcion=\"$_POST[descripcion]\",beneficiarios=\"$_POST[beneficiarios]\",fecha_cooperacion=\"$_POST[fecha_cooperacion]\",fecha_limite=\"$_POST[fecha_limite]\" where id_cooperacion=".$_POST["id_cooperacion"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver_cooperaciones.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver_cooperaciones.php';</script>";

			}
		}
	}
}



?>