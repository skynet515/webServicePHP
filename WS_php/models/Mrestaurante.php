<?php

include_once('../conexion/conexion.php');
class Mrestaurante
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	//Muestra todos los registros de Restaurante
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

	//Muestra un registro filtrado por id 
	function listarres_one($id)
	{
		$sql = "call sp_s_restaurante_one(?)";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
			$PrepareStatement->execute();
			return $PrepareStatement->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	//Insertar restaurante 
	function insertarrest($rest, $direc, $tel)
	{
		$sql = "call sp_c_restaurante(?,?,?)";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $rest, PDO::PARAM_STR);
			$PrepareStatement->bindValue(2, $direc, PDO::PARAM_STR);
			$PrepareStatement->bindValue(3, $tel, PDO::PARAM_STR);
			return $PrepareStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	//Elimina un restaurante
	function eliminarres($id)
	{
		$sql = "call sp_d_restaurante(?)";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $id, PDO::PARAM_STR);
			return $PrepareStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	//Modificar Restaurante

	function modificarres($id, $rest, $direc, $tel)
	{
		$sql = "call sp_u_restaurante(?,?,?,?)";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
			$PrepareStatement->bindValue(2, $rest, PDO::PARAM_STR);
			$PrepareStatement->bindValue(3, $direc, PDO::PARAM_STR);
			$PrepareStatement->bindValue(4, $tel, PDO::PARAM_STR);
			return $PrepareStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}
}
