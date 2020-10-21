<?php
include_once('../conexion/conexion.php');
class drestaurante
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	function listarres()
	{
		$sql = "call sp_s_restaurante_all";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->execute();
			return $PrepareStatement->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}
}
