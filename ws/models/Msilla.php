<?php
include_once('../../conexion/conexion.php');
class Msilla
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	//Muestra  la cantidad de sillas
	function listarsil($idr)
	{
		$sql = "call sp_s_sillas(?)";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $idr, PDO::PARAM_INT);
			$PrepareStatement->execute();
			return $PrepareStatement->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}


	//Insertar silla
	function insertarsil($num, $idr)
	{
		$sql = "call sp_c_silla(?)";
		try {
			for ($x = 0; $x < $num; $x++) {
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$PrepareStatement->bindValue(1, $idr, PDO::PARAM_INT);
				$data = $PrepareStatement->execute();
			}
			return $data;
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	//Elimina una silla
	function eliminarsil($num, $idr)
	{

		try {
			for ($x = 0; $x < $num; $x++) {

				$sql = "SELECT MAX(idsilla) as id FROM tblsillas WHERE idrestaurante = ?;";
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$PrepareStatement->bindValue(1, $idr, PDO::PARAM_INT);
				$PrepareStatement->execute();
				$id = $PrepareStatement->fetch();

				if (!empty($id)) {
					$sql = "call sp_d_silla(?,?)";
					$PrepareStatement = $this->cnn->getPrepareStatement($sql);
					$PrepareStatement->bindValue(1, $id['id'], PDO::PARAM_INT);
					$PrepareStatement->bindValue(2, $idr, PDO::PARAM_INT);
					$data = $PrepareStatement->execute();
				}
			}
			return $data;
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}
}
