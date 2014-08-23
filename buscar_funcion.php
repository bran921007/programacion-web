<?php
include('conexion.php');

class Buscador {

	static function lista($respuesta){

		$data = array();
		$consulta = "select * from literatura WHERE titulo LIKE '%$respuesta%' OR mensaje LIKE '%$respuesta%' ";
		$rs = mysqli_query(conexion::obtenerInstancia(), $consulta );
		if(mysqli_num_rows($rs) >0)
		{
			while($fila = mysqli_fetch_assoc($rs))
			{
				$data[] = $fila;
			}
		}
		return $data;
	}
}
?>