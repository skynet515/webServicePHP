<?php
include("../models/Mtrabajador.php");
class Ctrabajador
{
	private $tb;

	//constructor
	public function __construct()
	{
		$this->tb = new Mtrabajador();
	}

	//Select todos trabajadores
	public function listartrabajador()
	{
		$data = $this->tb->listartrabajador_all();
		return $data;
	}

	//Select un trabajador
	public function listartrabajador_one($id)
	{
		$data = $this->tb->listartrabajador_one($id);
		return $data;
	}

	//Eliminar trabajador
	public function eliminartrabajador($id)
	{
		$data = $this->tb->eliminartrabajador($id);
		return $data;
	}

	//Insertar trabajador
	public function insertartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $rest)
	{

		$data = $this->tb->Insertartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $rest);
		return $data;
	}

	//Modificar
	//Insertar trabajador
	public function modificartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $rest, $id)
	{
		return $this->tb->modificartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $rest, $id);
	}
}
