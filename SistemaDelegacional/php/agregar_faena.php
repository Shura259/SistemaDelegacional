<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_faena"]) &&isset($_POST["lugar"]) &&isset($_POST["fecha"]) &&isset($_POST["hora"]) &&isset($_POST["descripcion"])){
		if($_POST["tipo_faena"]!=""&&$_POST["lugar"]!=""&&$_POST["fecha"]!=""&&$_POST["hora"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";
			
			$sql = "insert into faenas(tipo_faena,lugar,fecha,hora,descripcion) value (\"$_POST[tipo_faena]\",\"$_POST[lugar]\",\"$_POST[fecha]\",\"$_POST[hora]\",\"$_POST[descripcion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver_faenas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver_faenas.php';</script>";

			}
		}
	}
}



?>