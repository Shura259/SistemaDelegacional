<?php

if(!empty($_POST)){
	if(isset($_POST["nombre_habitante"]) &&isset($_POST["cargo"]) &&isset($_POST["inicio_cargo"]) &&isset($_POST["fin_cargo"]) &&isset($_POST["trabajos_realizados"]) &&isset($_POST["trabajos_pendientes"])){
		if($_POST["nombre_habitante"]!=""&&$_POST["cargo"]!=""&&$_POST["inicio_cargo"]!=""&&$_POST["fin_cargo"]!=""&&$_POST["trabajos_realizados"]!=""&&$_POST["trabajos_pendientes"]!=""){
			include "conexion.php";
			
			$sql = "update cargo_persona set nombre_habitante=\"$_POST[nombre_habitante]\",cargo=\"$_POST[cargo]\",inicio_cargo=\"$_POST[inicio_cargo]\",fin_cargo=\"$_POST[fin_cargo]\",trabajos_realizados=\"$_POST[trabajos_realizados]\",trabajos_pendientes=\"$_POST[trabajos_pendientes]\" where id_cargo_persona=".$_POST["id_cargo_persona"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver_cargos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver_cargos.php';</script>";

			}
		}
	}
}



?>