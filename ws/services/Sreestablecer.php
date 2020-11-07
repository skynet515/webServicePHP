<?php
include("../controllers/Creestablecer.php");

$method = $_SERVER["REQUEST_METHOD"];
$res = new Creestablecer();

//Enviar correo con la url para recuperar password
if ($method == "POST" && isset($_GET["correo"]) && isset($_GET["app"])) {
	$data = $res->correo($_GET["correo"], $_GET["app"]);
	print json_encode($data, JSON_FORCE_OBJECT);
}

if ($method == "GET") {
	$data = $res->validarToken($_GET["token"]);
	print json_encode($data, JSON_FORCE_OBJECT);
}

if ($method == "PUT") {
	$data = $res->update($_GET["id"], $_GET["clave"]);
	print json_encode($data, JSON_FORCE_OBJECT);
}
