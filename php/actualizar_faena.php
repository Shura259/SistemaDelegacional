<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_faena"]) &&isset($_POST["lugar"]) &&isset($_POST["fecha"]) &&isset($_POST["hora"]) &&isset($_POST["descripcion"])){
		if($_POST["tipo_faena"]!=""&&$_POST["lugar"]!=""&&$_POST["fecha"]!=""&&$_POST["hora"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";
			
			$sql = "update faenas set tipo_faena=\"$_POST[tipo_faena]\",lugar=\"$_POST[lugar]\",fecha=\"$_POST[fecha]\",hora=\"$_POST[hora]\",descripcion=\"$_POST[descripcion]\" where id_faena=".$_POST["id_faena"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver_faenas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver_faenas.php';</script>";

			}
		}
	}
}



?>