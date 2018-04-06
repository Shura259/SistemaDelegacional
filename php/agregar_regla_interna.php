<?php

if(!empty($_POST)){
	if(isset($_POST["categoria"]) &&isset($_POST["nombre"]) &&isset($_POST["descripcion"])){
		if($_POST["categoria"]!=""&&$_POST["nombre"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";
			
			$sql = "insert into reglamento_interno(categoria,nombre,descripcion) value (\"$_POST[categoria]\",\"$_POST[nombre]\",\"$_POST[descripcion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver_reglamento_interno.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver_reglamento_interno.php';</script>";

			}
		}
	}
}



?>