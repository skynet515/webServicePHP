<?php
include("../conexion/conexion.php");

class Mtrabajador
{
	private $cnn;
	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	//listar todos los trabajadores
	public function listartrabajador_all()
	{
		$sql = "call sp_s_trabajador_all";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->execute();
			return $PrepareStatement->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	//listar un trabajador
	public function listartrabajador_one($id)
	{
		$sql = "call sp_s_trabajador_one(?)";
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

	//Eliminar un trabajador:
	public function eliminartrabajador($id)
	{
		$sql = "CALL sp_d_trabajador(?)";

		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $id, PDO::PARAM_STR);
			$data = $PrepareStatement->execute();

			if ($data) {
				$sql = "SELECT idpersona FROM tbltrabajadores WHERE idtrabajador=?";
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
				$PrepareStatement->execute();
				$idpers = $PrepareStatement->fetch();

				$sql = "CALL sp_d_persona(?)";
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$PrepareStatement->bindValue(1, $idpers['idpersona'], PDO::PARAM_STR);
				return $PrepareStatement->execute();
			}
		} catch (Exception $e) {
		}
	}

	//Insert Trabajador:

	public function Insertartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $rest)
	{
		try {
			$sql = "CALL sp_s_rol(?)";
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $rol, PDO::PARAM_STR);
			$PrepareStatement->execute();
			$idr = $PrepareStatement->fetch();

			$sql = "SELECT correo FROM tblpersonas WHERE correo=(?)";
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $correo, PDO::PARAM_STR);
			$PrepareStatement->execute();
			$val = $PrepareStatement->fetch();


			if ($val) {
				return "exist";
			} else {

				if (!empty($idr)) {
					$sql = "CALL sp_c_personas(?,?,?,?,?,?,?)";
					$PrepareStatement = $this->cnn->getPrepareStatement($sql);
					$PrepareStatement->bindValue(1, $nombre, PDO::PARAM_STR);
					$PrepareStatement->bindValue(2, $apellido, PDO::PARAM_STR);
					$PrepareStatement->bindValue(3, $tel, PDO::PARAM_STR);
					$PrepareStatement->bindValue(4, $correo, PDO::PARAM_STR);
					$PrepareStatement->bindValue(5, $dui, PDO::PARAM_STR);
					$PrepareStatement->bindValue(6, $clave, PDO::PARAM_STR);
					$PrepareStatement->bindValue(7, $idr['idrol'], PDO::PARAM_INT);
					$req = $PrepareStatement->execute();

					if ($req) {

						$sql = "CALL sp_s_persona_max(?)";
						$PrepareStatement = $this->cnn->getPrepareStatement($sql);
						$PrepareStatement->bindValue(1, $tel, PDO::PARAM_STR);
						$PrepareStatement->execute();
						$idpers = $PrepareStatement->fetch();

						$sql = "SELECT idrestaurante FROM tblrestaurantes WHERE restaurante =?";
						$PrepareStatement = $this->cnn->getPrepareStatement($sql);
						$PrepareStatement->bindValue(1, $rest, PDO::PARAM_STR);
						$PrepareStatement->execute();

						$idrest = $PrepareStatement->fetch();

						if (!empty($idrest)) {
							$sql = "CALL sp_c_trabajador(?,?)";
							$PrepareStatement = $this->cnn->getPrepareStatement($sql);
							$PrepareStatement->bindValue(1, $idpers["idpersona"], PDO::PARAM_INT);
							$PrepareStatement->bindValue(2, $idrest["idrestaurante"], PDO::PARAM_INT);
							return $PrepareStatement->execute();
						}
					}
				}
			}
		} catch (Exception $e) {
		}
	}


	//Modificar 
	public function modificartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $rest, $idtra)
	{
		try {
			$sql = "CALL sp_s_rol(?)";
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->bindValue(1, $rol, PDO::PARAM_STR);
			$PrepareStatement->execute();
			$idr = $PrepareStatement->fetch();

			if (!empty($idr)) {
				$sql = "SELECT idpersona FROM tbltrabajadores WHERE idtrabajador=?";
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$PrepareStatement->bindValue(1, $idtra, PDO::PARAM_INT);
				$PrepareStatement->execute();
				$idpers = $PrepareStatement->fetch();

				$sql = "CALL sp_u_persona(?,?,?,?,?,?,?,?)";
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$PrepareStatement->bindValue(1, $nombre, PDO::PARAM_STR);
				$PrepareStatement->bindValue(2, $apellido, PDO::PARAM_STR);
				$PrepareStatement->bindValue(3, $tel, PDO::PARAM_STR);
				$PrepareStatement->bindValue(4, $correo, PDO::PARAM_STR);
				$PrepareStatement->bindValue(5, $dui, PDO::PARAM_STR);
				$PrepareStatement->bindValue(6, $clave, PDO::PARAM_STR);
				$PrepareStatement->bindValue(7, $idr['idrol'], PDO::PARAM_INT);
				$PrepareStatement->bindValue(8, $idpers['idpersona'], PDO::PARAM_INT);

				$req = $PrepareStatement->execute();

				if ($req) {

					$sql = "SELECT idrestaurante FROM tblrestaurantes WHERE restaurante =?";
					$PrepareStatement = $this->cnn->getPrepareStatement($sql);
					$PrepareStatement->bindValue(1, $rest, PDO::PARAM_STR);
					$PrepareStatement->execute();
					$idrest = $PrepareStatement->fetch();


					if (!empty($idrest)) {
						$sql = "CALL sp_u_trabajador(?,?)";
						$PrepareStatement = $this->cnn->getPrepareStatement($sql);
						$PrepareStatement->bindValue(1, $idpers["idpersona"], PDO::PARAM_INT);
						$PrepareStatement->bindValue(2, $idrest["idrestaurante"], PDO::PARAM_INT);
						return $PrepareStatement->execute();
					}
				}
			}
		} catch (Exception $e) {
		}
	}
}
