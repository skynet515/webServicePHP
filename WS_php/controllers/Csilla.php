<?php
include('../models/Msilla.php');

class Silla
{
	private $res;
	public function __construct()
	{
		$this->res = new Msilla();
	}

	//Mostrar todas las silla
	public function listarsilla()
	{
		return $this->res->listarsil();
	}

	//Insertar silla
	public function insertarsilla($num)
	{
		$req = $this->res->insertarsil($num);
		if ($req) return true;
		else return false;
	}

	//ELiminar silla
	public function eliminarsilla($num)
	{
		return $this->res->eliminarsil($num);
	}
}
