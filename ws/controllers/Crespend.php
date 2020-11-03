<?php
include('../../models/Mrespend.php');

class Respend
{
	private $res;
	public function __construct()
	{
		$this->res = new Mrespend();
	}

	//Mostrar todas las reservas pendientes
	public function listarespendi()
	{
		session_start();
		return $this->res->listarespend($_SESSION["idrest"]);
	}

	//Modificar restaurante
	public function modificarespendiente($id)
	{
		return $this->res->modificarespend($id);
	}
}
