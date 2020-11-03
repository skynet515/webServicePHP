<?php
include_once('../../conexion/conexion.php');
class Mrespend
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	//Muestra todos las reservas pendientes
	function listarespend($id)
	{
		$sql = "CALL sp_s_respend(?)";
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

	//Modifica reserva pendiente

	function modificarespend($id)
	{
		$sql = "call sp_u_respend(?)";
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
