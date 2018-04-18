<?php

if(!empty($_POST)){
	if(isset($_POST["categoria"]) &&isset($_POST["nombre"]) &&isset($_POST["descripcion"])){
		if($_POST["categoria"]!=""&&$_POST["nombre"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";
			
			$sql = "update reglamento_interno set categoria=\"$_POST[categoria]\",nombre=\"$_POST[nombre]\",descripcion=\"$_POST[descripcion]\" where id_reglamento_interno=".$_POST["id_reglamento_interno"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver_reglamento_interno.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver_reglamento_interno.php';</script>";

			}
		}
	}
}



?>