<?php

include('../../controllers/Ctrabajador.php');
include('../../controllers/Calgoritmos.php');

//instancia a la clase restaurante
$rest = new Ctrabajador();
//obtener la accion
$method = $_SERVER["REQUEST_METHOD"];

//Insertar trabajador
//URL: http://localhost:8080/WS_php/services/Strabajador.php?rol=Administrador&nombre=Jennifer&apellido=Cruz&tel=7914-2549&correo=2078962019@mail.utec.com&dui=12345678-9&clave=contraseña&restaurante=GabrielaG%GMistral
if (
	$method == "POST" &&
	isset($_GET["rol"]) &&
	isset($_GET["nombre"]) &&
	isset($_GET["apellido"]) &&
	isset($_GET["tel"]) &&
	isset($_GET["correo"]) &&
	isset($_GET["dui"]) &&
	isset($_GET["clave"]) &&
	isset($_GET["restaurante"])
) {

	$alg = new Algoritmos();
	$rol = $alg->palabra(($_GET["rol"]));
	$nombre = $alg->palabra(($_GET["nombre"]));
	$apellido = $alg->palabra(($_GET["apellido"]));
	$tel = $alg->palabra(($_GET["tel"]));
	$correo = $alg->palabra(($_GET["correo"]));
	$dui = $alg->palabra(($_GET["dui"]));
	$clave = $alg->palabra(($_GET["clave"]));
	$restaurante = $alg->palabra(($_GET["restaurante"]));

	$data = $rest->insertartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $restaurante);

	if ($data)
		print json_encode(true, JSON_FORCE_OBJECT);
	else
		print json_encode(false, JSON_FORCE_OBJECT);
}

//Modificar Trabajador
//URLPrueba:
//http://localhost:8080/WS_php/services/Strabajador.php?accion=update&rol=Administrador&nombre=Andrea&apellido=Portillo&tel=2222-9870&correo=2078962019@mail.utec..edu.sv&dui=87654321-0&clave=password&restaurante=TomasG%GJeferson&id=4
if (
	$method == "PUT" &&
	isset($_GET["rol"]) &&
	isset($_GET["nombre"]) &&
	isset($_GET["apellido"]) &&
	isset($_GET["tel"]) &&
	isset($_GET["correo"]) &&
	isset($_GET["dui"]) &&
	isset($_GET["clave"]) &&
	isset($_GET["restaurante"]) &&
	isset($_GET["id"])
) {

	$alg = new Algoritmos();

	$rol = $alg->palabra(($_GET["rol"]));
	$nombre = $alg->palabra(($_GET["nombre"]));
	$apellido = $alg->palabra(($_GET["apellido"]));
	$tel = $alg->palabra(($_GET["tel"]));
	$correo = $alg->palabra(($_GET["correo"]));
	$dui = $alg->palabra(($_GET["dui"]));
	$clave = $alg->palabra(($_GET["clave"]));
	$restaurante = $alg->palabra(($_GET["restaurante"]));
	$id = ($_GET["id"]);

	$data = $rest->modificartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $restaurante, $id);
	if ($data)
		print json_encode(true, JSON_FORCE_OBJECT);
	else
		print json_encode(false, JSON_FORCE_OBJECT);
}


//Eliminar un trabajador
if ($method == "DELETE" && isset($_GET["id"])) {
	$id = $_GET["id"];
	$data = $rest->eliminartrabajador($id);
	if ($data)
		print json_encode(true, JSON_FORCE_OBJECT);
	else
		print json_encode(false, JSON_FORCE_OBJECT);
}

//Select Trabajador
if ($method == "GET") {

	if (!isset($_GET["id"])) {
		$data = $rest->listartrabajador();
		if (!empty($data)) {
			print json_encode($data, JSON_FORCE_OBJECT);
		}
	}
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		$data = $rest->listartrabajador_one($id);
		print json_encode($data, JSON_FORCE_OBJECT);
	}
}
