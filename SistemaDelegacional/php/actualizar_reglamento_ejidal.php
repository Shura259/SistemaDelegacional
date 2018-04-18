<?php

if(!empty($_POST)){
	if(isset($_POST["categoria"]) &&isset($_POST["nombre"]) &&isset($_POST["descripcion"])){
		if($_POST["categoria"]!=""&&$_POST["nombre"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";
			
			$sql = "update reglamento_ejidal set categoria=\"$_POST[categoria]\",nombre=\"$_POST[nombre]\",descripcion=\"$_POST[descripcion]\" where id_reglamento_ejidal=".$_POST["id_reglamento_ejidal"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver_reglamento_ejidal.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver_reglamento_ejidal.php';</script>";

			}
		}
	}
}



?>