<?php
include('../../models/Mrestaurante.php');

class Restaurante
{
	private $res;
	public function __construct()
	{
		$this->res = new Mrestaurante();
	}

	//Mostrar todos los restaurantes
	public function listarrestaurante()
	{
		return $this->res->listarres();
	}

	//Mostrar un restaurante
	public function listarrestaurante_one($id)
	{
		return $this->res->listarres_one($id);
	}

	//Modificar restaurante
	public function modificarestaurante($id, $rest, $direc, $tel)
	{
		return $this->res->modificarres($id, $rest, $direc, $tel);
	}

	//ELiminar restaurante
	public function eliminarrestaurante($id)
	{
		return $this->res->eliminarres($id);
	}

	//Insertar restaurante
	public function insertarrest($rest, $direc, $tel)
	{
		$data = $this->res->insertarrest($rest, $direc, $tel);
		if ($data) return true;
		else return false;
	}
}
