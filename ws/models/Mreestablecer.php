<?php
include("../conexion/conexion.php");
class Reestablecer
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	public function correoExist($correo)
	{
		$sql = "SELECT * FROM tblpersonas
		WHERE correo = ?";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $correo, PDO::PARAM_STR);
			$PrepareStatement->execute();
			return $PrepareStatement->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}
}
