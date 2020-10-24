<?php

include('../controllers/Ctrabajador.php');
include('../controllers/Calgoritmos.php');

//instancia a la clase restaurante
$rest = new Ctrabajador();
//obtener la accion
$accion = $_GET["accion"];

//Insertar trabajador
//URL: http://localhost:8080/WS_php/services/Strabajador.php?accion=insert&rol=Administrador&nombre=Jennifer&apellido=Cruz&tel=7914-2549&correo=2078962019@mail.utec.com&dui=12345678-9&clave=contraseña&restaurante=GabrielaG%GMistral
if (
	$_GET["accion"] == "insert" &&
	!empty($_GET["rol"]) &&
	!empty($_GET["nombre"]) &&
	!empty($_GET["apellido"]) &&
	!empty($_GET["tel"]) &&
	!empty($_GET["correo"]) &&
	!empty($_GET["dui"]) &&
	!empty($_GET["clave"]) &&
	!empty($_GET["restaurante"])
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

	if ($rest->insertartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $restaurante)) {
		print json_encode("true", JSON_FORCE_OBJECT);
	}
}

//Modificar Trabajador
//URLPrueba:
//http://localhost:8080/WS_php/services/Strabajador.php?accion=update&rol=Administrador&nombre=Andrea&apellido=Portillo&tel=2222-9870&correo=2078962019@mail.utec..edu.sv&dui=87654321-0&clave=password&restaurante=TomasG%GJeferson&idtrabajador=4
if (
	$_GET["accion"] == "update" &&
	!empty($_GET["rol"]) &&
	!empty($_GET["nombre"]) &&
	!empty($_GET["apellido"]) &&
	!empty($_GET["tel"]) &&
	!empty($_GET["correo"]) &&
	!empty($_GET["dui"]) &&
	!empty($_GET["clave"]) &&
	!empty($_GET["restaurante"] &&
		!empty($_GET["idtrabajador"]))
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
	$id = ($_GET["idtrabajador"]);

	if ($rest->modificartrabajador($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $restaurante, $id)) {
		print json_encode("true", JSON_FORCE_OBJECT);
	}
}


//Eliminar un trabajador
if ($_GET["accion"] == "delete" && is_numeric($_GET["id"])) {
	$id = $_GET["id"];
	$data = $rest->eliminartrabajador($id);
	if ($data) {
		print json_encode("true", JSON_FORCE_OBJECT);
	}
}

//Select Trabajador
if ($accion == "select") {

	if ($_GET["var"] == "all") {
		$data = $rest->listartrabajador();
		if (!empty($data)) {
			print json_encode($data, JSON_FORCE_OBJECT);
		}
	}
	if ($_GET["var"] == "one" && is_numeric($_GET["id"])) {
		$id = $_GET["id"];
		$data = $rest->listartrabajador_one($id);
		if (!empty($data)) {
			print json_encode($data, JSON_FORCE_OBJECT);
		}
	}
}
