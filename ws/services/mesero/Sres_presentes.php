<?php
include('../../controllers/Crespresente.php');

//instancia a la clase respresente
$rest = new Respresente();

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {

	$data = $rest->listarespresente();
	if ($data) print json_encode($data, JSON_FORCE_OBJECT);
	else print json_encode(false, JSON_FORCE_OBJECT);
}

if ($method == "PUT") {
	$id = $_GET["id"];
	$data = $rest->modificarespresente($id);

	if ($data) print json_encode(true, JSON_FORCE_OBJECT);
	else print json_encode(false, JSON_FORCE_OBJECT);
}
