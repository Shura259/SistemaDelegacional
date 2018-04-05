<?php

if(!empty($_POST)){
	if(isset($_POST["nombre_habitante"]) &&isset($_POST["inicio_cargo"]) &&isset($_POST["fin_cargo"]) &&isset($_POST["trabajos_realizados"]) &&isset($_POST["trabajos_pendientes"])){
		if($_POST["nombre_habitante"]!=""&&$_POST["inicio_cargo"]!=""&&$_POST["fin_cargo"]!=""&&$_POST["trabajos_realizados"]!=""&&$_POST["trabajos_pendientes"]!=""){
			include "conexion.php";
			
			$sql = "insert into cargo_persona(nombre_habitante,inicio_cargo,fin_cargo,trabajos_realizados,trabajos_pendientes) value (\"$_POST[nombre_habitante]\",\"$_POST[inicio_cargo]\",\"$_POST[fin_cargo]\",\"$_POST[trabajos_realizados]\",\"$_POST[trabajos_pendientes]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver_cargos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver_cargos.php';</script>";

			}
		}
	}
}



?>