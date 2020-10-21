<?php
include('../models/Drestaurante.php');

class Restaurante
{
	private $res;
	public function __construct()
	{
		$this->res = new drestaurante();
	}

	public function listarrestaurante()
	{
		return $this->res->listarres();
	}
}
