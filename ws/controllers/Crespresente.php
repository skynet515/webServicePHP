<?php
include('../../models/Mrespresente.php');

class Respresente
{
	private $res;
	public function __construct()
	{
		$this->res = new Mrespresente();
	}

	public function listarespresente()
	{
		session_start();
		return $this->res->listarespresen($_SESSION["idrest"]);
	}

	//Modificar restaurante
	public function modificarespresente($id)
	{
		return $this->res->modificaresprese($id);
	}
}
