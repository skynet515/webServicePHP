<?php
include('../../models/Msilla.php');

class Silla
{
	private $res;
	public function __construct()
	{
		$this->res = new Msilla();
	}

	//Mostrar todas las silla
	public function listarsilla($idr)
	{
		return $this->res->listarsil($idr);
	}

	//Insertar silla
	public function insertarsilla($num, $idr)
	{
		$req = $this->res->insertarsil($num, $idr);
		if ($req) return true;
		else return false;
	}

	//ELiminar silla
	public function eliminarsilla($num, $idr)
	{
		return $this->res->eliminarsil($num, $idr);
	}
}
