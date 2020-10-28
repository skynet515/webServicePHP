<?php
include_once('../conexion/conexion.php');
class Msilla
{
	private $cnn;

	public function __construct()
	{
		$this->cnn = Conexion::getInstance();
	}

	//Muestra  la cantidad de sillas
	function listarsil()
	{
		$sql = "call sp_s_sillas";
		try {
			$PrepareStatement = $this->cnn->getPrepareStatement($sql);
			$PrepareStatement->execute();
			return $PrepareStatement->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}


	//Insertar silla
	function insertarsil($num)
	{
		$sql = "call sp_c_silla";
		try {
			for ($x = 0; $x < $num; $x++) {
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$data = $PrepareStatement->execute();
			}


			return $data;
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	//Elimina una silla
	function eliminarsil($num)
	{

		try {
			for ($x = 0; $x < $num; $x++) {

				$sql = "SELECT MAX(idsilla) as id FROM tblsillas;";
				$PrepareStatement = $this->cnn->getPrepareStatement($sql);
				$PrepareStatement->execute();
				$id = $PrepareStatement->fetch();

				if (!empty($id)) {
					$sql = "call sp_d_silla(?)";
					$PrepareStatement = $this->cnn->getPrepareStatement($sql);
					$PrepareStatement->bindValue(1, $id['id'], PDO::PARAM_INT);
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


/*

//iniciar sesion


if(rol =="est" || docente || adminAca){
	rol="cliente"
	id=$data["idcliente"];
}
else{
	rol=$data["rol"];
	id=$data["idtrabajador"];
}

nombre ="svvw"
apellido="sfwv"
correo= "2619" 
nombre ="svvw"
apellido="sfwv"
correo= "2619"
sesion = true 

//cerrarsesion


//
url: var==session


nombre ="svvw"
apellido="sfwv"
correo= "2619"
rol = 
sesion = true  

if(sesion!=null){
Vista

}




*/
