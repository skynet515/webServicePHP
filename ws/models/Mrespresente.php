<?php
include_once('../../conexion/conexion.php');
class Mrespresente
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	//Muestra todas las reservas presentes
	function listarespresen($id)
	{
		$sql = "call sp_s_respresente(?)";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
			$PrepareStatement->execute();
			return $PrepareStatement->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	//Modifica reserva presente

	function modificaresprese($id)
	{
		$sql = "call sp_u_respresente(?)";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
			return $PrepareStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}
}
