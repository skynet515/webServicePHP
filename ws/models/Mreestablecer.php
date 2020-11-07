<?php
include("../conexion/conexion.php");
class Reestablecer
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	public function modificar($id, $clave)
	{
		$sql = "UPDATE tblpersonas 
		SET clave = ?, codigo = null WHERE idpersona = ?";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $clave, PDO::PARAM_STR);
			$PrepareStatement->bindValue(2, $id, PDO::PARAM_INT);
			return $PrepareStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}

	public function token($token)
	{
		$sql = "SELECT fecha_rec, idpersona FROM tblpersonas
		WHERE codigo = ? AND estado=1;";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $token, PDO::PARAM_STR);
			$PrepareStatement->execute();
			return $PrepareStatement->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}

	public function correoExist($correo)
	{
		$sql = "SELECT * FROM tblpersonas
		WHERE correo = ?";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $correo, PDO::PARAM_STR);
			$PrepareStatement->execute();
			return $PrepareStatement->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}
	/*
	indicacion
				copie el siguiente código y peguelo en la aplicacion de escritorio CETU
				de click en el siguiente enlace, para reestablecer su contraseña

	indicacion2
		código
		enlace
	*/

	public function codigo($correo, $codigo, $fecha)
	{
		$sql = "UPDATE tblpersonas 
		SET codigo = ?, fecha_rec = ?
		WHERE correo = ?;";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $codigo, PDO::PARAM_STR);
			$PrepareStatement->bindValue(2, $fecha, PDO::PARAM_STR);
			$PrepareStatement->bindValue(3, $correo, PDO::PARAM_STR);
			return $PrepareStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}
}
